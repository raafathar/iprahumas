<?php

namespace App\DataTables;

use App\Models\Instansi;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InstansiDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn("opsi", "dashboard.admin.component.instansi.opsi")
            ->rawColumns(['opsi'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Instansi $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('instansi-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->buttons([
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset')->className("btn btn-danger"),
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
            Column::make('i_nama')
                ->title("Nama")
                ->orderable(),
            Column::make("opsi")
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Instansi_' . date('YmdHis');
    }
}
