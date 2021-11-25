<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <div class="container-fluid">
            <ul class="navbar-nav nav-pills">
                {{-- Logo & Collection DB --}}
                
                <li>
                    <a class="nav-link text-primary"><b>Hotwheels Collection</b></a>
                </li>
                
                {{-- Collection --}}
                @if ($title == 'Collection')
                    <li><a class="nav-link active " href="/collection" style="background-color: blue-300; color: black;">Collection</a></li>
                @else
                    <li><a class="nav-link" href="/collection">Collection</a></li>
                @endif

                {{-- Cars --}}
                @if ($title == 'Cars')
                    <li><a class="nav-link active" href="/cars" style="background-color: blue-300; color: black;">Cars</a></li>
                @else
                    <li><a class="nav-link" href="/cars">Cars</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
