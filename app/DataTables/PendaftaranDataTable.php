<?php

namespace App\DataTables;

use App\Models\Form;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PendaftaranDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->rawColumns(['opsi', 'jabatan_id', 'golongan_id', 'jabatan_id', 'isAccept', 'NIP'])
            ->addColumn("opsi", "dashboard.admin.component.pendaftaran.opsi")
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
            ->addColumn('isAccept', function (User $user) {
                if ($user->isAccept == '1') {
                    return '<span class="badge bg-primary"> Diterima </span>';
                } else if ($user->isAccept == '2') {
                    return
                        '<span class="badge bg-danger">Ditolak</span>';
                } else if ($user->isAccept == '0') {
                    return '<span class="badge bg-warning">Menunggu</span>';
                }
            })
            ->filterColumn('NIP', function ($query, $keyword) {
                $query->where('forms.NIP', 'like', "%$keyword%");
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
            ->filterColumn('isAccept', function ($query, $keyword) {
                if (strtolower($keyword) === 'diterima') {
                    $query->where('isAccept', '1');
                } elseif (strtolower($keyword) === 'ditolak') {
                    $query->where('isAccept', '2');
                } elseif (strtolower($keyword) === 'menunggu') {
                    $query->where('isAccept', '0');
                }
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
            ->join('instansis', 'forms.instansi_id', '=', 'instansis.id');

        if (request()->is('admin/dashboard/pendaftaran/diterima')) {
            $query->where('isAccept', "1");
        } else if (request()->is('admin/dashboard/pendaftaran/ditolak')) {
            $query->where('isAccept', "2");
        } else if (request()->is('admin/dashboard/pendaftaran/diproses')) {
            $query->where('isAccept', "0");
        }

        return $query;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('pendaftaran-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters([
                'searching' => true,
            ])
            ->orderBy(1)
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
            Column::make('jabatan_id')->title('Jabatan'),
            Column::make('golongan_id')->title('Golongan'),
            Column::make('instansi_id')->title('Instansi'),
            Column::make('isAccept')->title('Status'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Pendaftaran_' . date('YmdHis');
    }
}
