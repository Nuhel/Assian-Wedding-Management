<?php

namespace App\DataTables;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;

class GalleryDataTable extends DataTable
{

    protected $tableId = 'gallery-table';

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable(Request $request,$query)
    {

        return datatables()
            ->eloquent($query)
            ->addColumn('image', function(Gallery $gallery) {
                $url = URL::to($gallery->image);
                return "<div class='d-flex '>
                <img width='100' src='$url' />
                </div>";
            })
            ->addColumn('actions', function(Gallery $gallery) {
                return view('components.actionbuttons.table_actions')->with('route','galleries')->with('param','gallery')->with('value',$gallery)->render();
            })
            ->addIndexColumn()
            ->rawColumns(['actions','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Gallery $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Gallery $model)
    {
        return $model->newQuery();
    }

    /**
     * Get columns.
     *
     * @return array
     */
    public function getColumns()
    {
        return [
            Column::computed('index','SL')->width(20),

            Column::computed('image')->width(600),
            Column::computed('actions')
                  ->exportable(false)
                  ->printable(false)
                  ->width(150)
                  ->addClass('text-center')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Gallery_' . date('YmdHis');
    }

    public function getFilters()
    {
        return [

        ];
    }

    public function overrideButtons(){
        return [
            'create'=>null,
            'export'=>null,
            'print'=>null,
            'reset'=>null,
            'reload'=>null,
        ];
    }
}
