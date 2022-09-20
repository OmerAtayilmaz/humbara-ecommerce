@extends('layouts.backoffice')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold card-title-text">Course Detail</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>User</th>
                                    <td>
                                        <a href="#" class="btn btn-info">Ahmet Kılıç </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>Sıfırdan Zirveye Blender 3D Modelleme eğitimi</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1515222410484-613a51c43721?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="" width="200">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Video</th><td>
                                        <iframe width="400" height="200" src="https://www.youtube.com/embed/SHgBfc0-Fp8" title="Emma Peters - Fous (DNDM Remix)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero eum perferendis officiis nisi animi rerum illum possimus distinctio dolorum consequatur? Eveniet commodi quas inventore libero fugit corporis accusantium recusandae aut amet rem deserunt quam rerum nemo autem laborum, placeat quasi voluptatem deleniti earum veritatis et assumenda iste! Accusantium voluptatibus, pariatur tenetur, explicabo perspiciatis dolores nobis laudantium libero, architecto deleniti quisquam nam dolorum ex eius sint veniam omnis natus aperiam. Tempora blanditiis eligendi magni necessitatibus ad eaque dolore maiores eius provident! Ipsam blanditiis reprehenderit quae. Fugit maiores reprehenderit animi nam accusamus exercitationem unde? Illum minus accusamus voluptates voluptas, cumque possimus ullam quasi maiores repellat, velit ab in sunt fugiat repudiandae, iusto aspernatur eligendi qui vitae! Dolorem fugit rem accusantium numquam sint reiciendis nobis modi labore dolore amet ex aspernatur, cum quasi sequi, explicabo ratione voluptatum culpa laudantium possimus veniam deleniti unde. Minus assumenda sed non, autem nesciunt fugiat ut aliquam maxime!
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>
                                        3D Modeling, Digital painting
                                    </td>
                                </tr>
                                <tr>
                                    <th>Course Content Id</th><td>User</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>ACTIVE</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>
                                        3D Drawing
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection