<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="">
                    Laravel Blog
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <ul class="nav navbar-nav">
                    <li><a href="admin/posts">Posts</a></li>
                    <li><a href="admin/categories">Categories</a></li>
                    <li><a href="admin/comments">Comments</a></li>
                    <li><a href="admin/tags">Tags</a></li>

                    <li><a href="admin/users">Users</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Admin <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="logout" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Comments

                            <a href="" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fugit sit rerum et atque qui.</td>
                                    <td>Soluta sed atque aut rem ipsam asperiores. Rerum nobis beatae voluptas iusto
                                        quas. Qui nihil sed et itaque vero neque dolores expedita. Aut voluptatem
                                        consequatur sit eligendi corporis hic id. Excepturi nesciunt impedit delectus
                                        id ea.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Autem rem repudiandae dolores alias sunt asperiores deserunt.</td>
                                    <td>Officiis debitis vel unde amet quia. Nihil omnis voluptas voluptate non placeat
                                        incidunt impedit et. Eligendi enim nisi minus nobis.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sapiente dolorum quo non voluptates atque dolore.</td>
                                    <td>Iure suscipit et est quia culpa nemo. Quam sint ipsam perspiciatis quo
                                        consequuntur. Ipsa quos veniam quia molestiae dolor ullam.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sit veniam et fugit est saepe repellendus soluta.</td>
                                    <td>Tempora fugiat rem quo sint. Et ipsum voluptates reprehenderit tempora
                                        cupiditate aut. Nesciunt in nihil sit hic possimus.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Similique ea eum odit aspernatur quibusdam atque.</td>
                                    <td>Dignissimos nihil quis aut tempore est aut quia. Reiciendis quisquam
                                        repudiandae cum quia. Quaerat et commodi voluptatem quia voluptatibus
                                        molestias. Soluta aut aut alias velit alias omnis. Pariatur nihil delectus quas
                                        in maxime natus voluptatum qui.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voluptatem ratione quidem eos quod animi.</td>
                                    <td>Error quos nobis nihil ut ea. Eos non blanditiis aspernatur et accusantium sit.
                                        Qui pariatur facilis quia sunt corrupti dignissimos itaque perferendis. Placeat
                                        amet repudiandae exercitationem recusandae dicta qui ullam. Non sapiente dicta
                                        id.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sit veniam et fugit est saepe repellendus soluta.</td>
                                    <td>Asperiores totam voluptate ducimus asperiores. Et ut quia voluptate id maxime
                                        aut aut. Consequuntur ea aliquam quidem labore molestias sapiente. Ut deleniti
                                        voluptatem a ratione.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Autem rem repudiandae dolores alias sunt asperiores deserunt.</td>
                                    <td>Quis sunt nesciunt autem quas. Cum exercitationem cumque autem sint suscipit
                                        quam. In laboriosam iusto velit ut expedita nihil minus.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Autem rem repudiandae dolores alias sunt asperiores deserunt.</td>
                                    <td>Quas voluptatibus id enim. Sequi laudantium est saepe aut unde architecto
                                        veritatis. Laudantium vero quidem placeat provident. Ut autem ullam dolores est
                                        fugiat aliquam.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deleniti quisquam ipsam sint veritatis neque culpa quae.</td>
                                    <td>Quaerat accusantium rem facilis assumenda doloremque. Esse ex ut vero rerum
                                        pariatur. Dolorem aut dolores nisi ad natus quis. Est eos possimus consequatur
                                        illum velit. Ut consequuntur voluptate nemo voluptatum autem.</td>
                                    <td>
                                        <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="pagination">

                            <li class="disabled"><span>«</span></li>





                            <li class="active"><span>1</span></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>


                            <li><a href="" rel="next">»</a></li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>