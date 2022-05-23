<div id="footerTop">

    <!-- Prima lista -->
    <div>
        <ul>
            <h3>DC Comics</h3>
            <li>
                @foreach ($arrayDCComics as $item)
                <a href="#">{{$item}}</a>
                @endforeach
            </li>
        </ul>
        <ul>
            <h3>Shop</h3>
            <li>
                @foreach ($arrayShop as $item)
                <a href="#">{{$item}}</a>
                @endforeach
            </li>
        </ul>
    </div>

    <!-- Seconda Lista -->
    <div>
        <ul>
            <h3>DC</h3>
            <li>
                @foreach ($arrayDC as $item)
                <a href="#">{{$item}}</a>
                @endforeach
            </li>
        </ul>
    </div>

    <!-- Terza Lista -->
    <div>
        <ul>
            <h3>SITES</h3>
            <li>
                @foreach ($arraySites as $item)
                <a href="#">{{$item}}</a>
                @endforeach
            </li>
        </ul>
    </div>

    <div class="bg-logo"></div>
</div>

