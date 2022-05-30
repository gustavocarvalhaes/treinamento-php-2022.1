<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class GaleriaController
{

    public function view()
    {
        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                return redirect('imagens');
            }
        }

        $items_per_page = 10;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countAll('fotos');
        
        if ($start_limit > $rows_count) {
            return redirect('imagens');
        }
        
        $total_pages = ceil($rows_count / $items_per_page);
        $fotos = App::get('database')->selectAll('fotos', $start_limit, $items_per_page);

        return view('site/galeria', compact("fotos", "page", "total_pages"));
    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}
