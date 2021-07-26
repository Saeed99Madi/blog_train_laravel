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
                            Categories

                            <a href="category/create" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Post Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sedd</td>
                                    <td>1</td>
                                    <td>
                                        <a href="categories/1/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/1" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ut</td>
                                    <td>4</td>
                                    <td>
                                        <a href="categories/2/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/2" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>id</td>
                                    <td>1</td>
                                    <td>
                                        <a href="categories/3/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/3" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>occaecati</td>
                                    <td>0</td>
                                    <td>
                                        <a href="categories/4/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/4" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>sint</td>
                                    <td>3</td>
                                    <td>
                                        <a href="categories/5/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/5" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>quia</td>
                                    <td>2</td>
                                    <td>
                                        <a href="categories/6/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/6" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ipsum</td>
                                    <td>4</td>
                                    <td>
                                        <a href="categories/7/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/7" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>quisquam</td>
                                    <td>3</td>
                                    <td>
                                        <a href="categories/8/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/8" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>unde</td>
                                    <td>6</td>
                                    <td>
                                        <a href="categories/9/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/9" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>voluptatum</td>
                                    <td>1</td>
                                    <td>
                                        <a href="categories/10/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="categories/10" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>