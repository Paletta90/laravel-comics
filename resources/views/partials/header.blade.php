<header>

    <div class="bluLine">

        <div>

            <p>dc power visa</p>
            <p>additional dc sites</p>

        </div>

    </div>

    <div class="header">

        {{-- Logo --}}
        <div>
            <a href="#"><img src="../images/dc-logo.png" alt="" width="80px"></a>
        </div>

        {{-- Menu --}}
        <div>

            <ul>

                @foreach ($navBar as $item)
                <li>
                    <a href="">
                        <div class="p-yb-30">{{$item}}</div>
                        <div class="bar"></div>
                    </a>
                </li>
                @endforeach

            </ul>

        </div>

        {{-- Search --}}
        <div>
            <input type="text" placeholder="search" width="100px">
        </div>

    </div>

</header>
