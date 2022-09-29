<?php

namespace App\Exports;

use App\Models\Items;
use Maatwebsite\Excel\Concerns\FromCollection;

class ItemsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Items::join('unit', 'unit.id', '=', 'items.unit_id')
                ->leftjoin('category','category.id','=', 'items.category_id')
                ->select('items.*', 'unit.name_unit', 'category.name_category')
                ->orderBy('items.name_item', 'ASC')
                ->get();
    }
}
