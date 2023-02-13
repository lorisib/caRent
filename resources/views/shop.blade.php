@extends('layouts.front')
@section('title', 'shop')

@section('content')
<div class="album py-5 bg-light">
    <div class="title p-5 py-3">
        <h2>select one of our options</h2>
        <form action="" method="GET">
            <input type="search" name="search" id="search" class="form-control" placeholder="search..." required>
        </form>
        <form action="" method="GET">
            <select name="sort" id="dort" class="form-control" required>
                <option value="">sort by</option>
                <option value="price_asc">highest to lowest</option>
                <option value="price_desc  ">lowest to hightst</option>
            </select>
        </form>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://lh3.googleusercontent.com/2uBXF7XmlFuuRThwKmuV2_wTbxo4jaAQDgjizVBlu3dNlnlUgRyzbJqgTX_Wpvo3E856xBU6i7NCixXrN4TIkf6icSJnMtKoPFfomTFTSevB1dCXPzCHeyfO2VCve_UnkKPwfSryFFp7HUWiLE-luKRzM0P7haHkkVg7vZSb7fOBBq5o36MaINKVcc_XSomcDwGWxOUWwE3fEZVs4XOyObv7MjOIvZbNgU0Mjvbws6iqO_t9zFkx2tf9oSrxmj3wE9P-DnYMOq0p7HC98WGnuyeDiB9RfqKkBS1kixOGIbOoSozJEQ_EfZ722cJFHV7eF7S45xJmz75XFSX9pEN0Z_kiKIgD9B05RI_6D5VpVAPzgR0ml52TeVp5WgbNKxbjKgZ6dgyJepoAsTiqn5t07rYbQ4ShjObmggS55WQjAp32NI22_VWip-X77qmUL9twDUVDI70Hh_x-g4_ijFg8EG3L-ym-SrkZYzRkOD20TlbS9IZ9Ji-A15yyLsxGGB1LOpky2-LcO8tTwnBTFaQIDTEnMznatBGTtydKWUP4_i2vgct2TcY_mBAZKkuu2RDeps6YZVJuQVM86YnHnq42t3-bfeLLlQFAqEGJS_uSRQ64uvpiH59g8futJ2xSkwsyDdrB0VEtPNgO2pXE_T61gz7PRlWOVnWpVsRXgVbCNM17gh1cst_JcR4ka5031TP0lkcIyQen48bwPwS-wvDDgdGFKxtUb9Sig0i4ZZJGVKmb_0ywhqJoEOLbDyYZKlagTw-gw4fks3kqFgUiKfZ9jk8SojX-87bvi32hzw68XlrL5UgS5J1N23Qy1CfZ1JZl-iOFTrZlJwOiXRoCvKargs5Q7QmgTgR6Ei3HEaR075MkrJ7iTT7_1h7XZKbZWECG8CGuCrI9zIlbR9yQhoZTevOCKzAvmYTDipeBwFEa4QcHIF-3=w1743-h980-no?authuser=0" alt="">
                    <div class="card-body">
                        <h4>bmw m340i</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">checkout</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection                