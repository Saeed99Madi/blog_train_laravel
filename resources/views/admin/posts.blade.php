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
                            Posts

                            <a href="{{route('posts.create')}}" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td>{{$post->author}}</td>
                                    <td>ipsum</td>
                                    <td></td>
                                    <td>No</td>
                                    <td>
                                        <a href="/posts/1/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href="/posts/1" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/1/edit" class="btn btn-xs btn-info">Edit</a>
                                        <a href="/posts/1" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                           
                            </tbody>
                        </table>

                        <ul class="pagination">

                            <li class="disabled"><span>«</span></li>





                            <li class="active"><span>1</span></li>
                            <li><a href=/posts?page=2">2 </a> </li> <li><a href=/posts?page=3">3 </a> </li> <li><a href=/posts?page=2"
                                            rel="next">»</a></li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>