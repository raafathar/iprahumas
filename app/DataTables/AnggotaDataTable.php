<?php

namespace App\DataTables;

use App\Models\Anggotum;
use App\Models\Golongan;
use App\Models\Instansi;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AnggotaDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $jabatans = Jabatan::all()->map(function ($jabatan) {
            return [
                'value' => $jabatan->id,
                'nama' => $jabatan->j_nama,
            ];
        })->toArray();

        $golongans = Golongan::all()->map(function ($golongan) {
            return [
                'value' => $golongan->id,
                'nama' => $golongan->g_nama,
            ];
        })->toArray();

        $instansis = Instansi::all()->map(function ($instansi) {
            return [
                'value' => $instansi->id,
                'nama' => $instansi->i_nama,
            ];
        })->toArray();

        return (new EloquentDataTable($query))
            ->rawColumns(['opsi', 'jabatan_id', 'golongan_id', 'NIP'])
            ->addColumn('opsi', function ($model) use ($jabatans, $golongans, $instansis) {
                return view('dashboard.admin.component.anggota.opsi', [
                    'model' => $model,
                    'jabatans' => $jabatans,
                    'golongans' => $golongans,
                    'instansis' => $instansis,
                ]);
            })
            ->addColumn('jabatan_id', function (User $user) {
                return $user->j_nama;
            })
            ->addColumn('NIP', function (User $user) {
                return $user->NIP;
            })
            ->addColumn('golongan_id', function (User $user) {
                return $user->g_nama;
            })
            ->addColumn('instansi_id', function (User $user) {
                return $user->i_nama;
            })
            ->filterColumn('NIP', function ($query, $keyword) {
                $query->where('forms.NIP', 'like', "%$keyword%");
            })
            ->filterColumn('f_no_wa', function ($query, $keyword) {
                $query->where('forms.f_no_wa', 'like', "%$keyword%");
            })
            ->filterColumn('f_alamat', function ($query, $keyword) {
                $query->where('forms.f_alamat', 'like', "%$keyword%");
            })
            ->filterColumn('jabatan_id', function ($query, $keyword) {
                $query->where('jabatans.j_nama', 'like', "%$keyword%");
            })
            ->filterColumn('golongan_id', function ($query, $keyword) {
                $query->where('golongans.g_nama', 'like', "%$keyword%");
            })
            ->filterColumn('instansi_id', function ($query, $keyword) {
                $query->where('instansis.i_nama', 'like', "%$keyword%");
            })
            ->filterColumn('f_unit_kerja', function ($query, $keyword) {
                $query->where('forms.f_unit_kerja', 'like', "%$keyword%");
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        $query = $model->newQuery()
            ->join('forms', 'user_id', '=', 'users.id')
            ->join('jabatans', 'forms.jabatan_id', '=', 'jabatans.id')
            ->join('golongans', 'forms.golongan_id', '=', 'golongans.id')
            ->join('instansis', 'forms.instansi_id', '=', 'instansis.id')
            ->where('isAccept', '1');

        return $query;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('anggota-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->parameters([
                'searching' => true,
            ])
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->hidden(),
            Column::make('opsi'),
            Column::make('username'),
            Column::make('NIP')->title('NIP'),
            Column::make('email'),
            Column::make('f_no_wa')->title('No. WA'),
            Column::make('f_alamat')->title('Alamat'),
            Column::make('jabatan_id')->title('Jabatan'),
            Column::make('golongan_id')->title('Golongan'),
            Column::make('instansi_id')->title('Instansi'),
            Column::make('f_unit_kerja')->title('Unit Kerja'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Anggota_' . date('YmdHis');
    }
}
