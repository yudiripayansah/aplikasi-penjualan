<html>
    <head>
        <title>Table Products</title>
    </head>
    <body>
        <h1>DATA PRODUK</h1>

            @foreach($products as $p)
            <li>{{ "No : ".$p->id. 
                " | Name : ".$p->name.
                " | Descrition : ".$p->description.
                " | Image : ".$p->image.
                " | Price : ".$p->price.
                " | Stock : ".$p->stock.
                " | id_category : ".$p->id_category.
                " | id_group : ".$p->id_group.
                " | deleted_at : ".$p->deleted_at}}</li>
            @endforeach
        </ul>
    </body>
</html>