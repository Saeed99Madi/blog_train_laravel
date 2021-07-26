<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog</title>
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#app-navbar-collapse"
            >
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="">
              Blog
            </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <ul class="nav navbar-nav">
              <li><a href="/admin/posts">Posts</a></li>
              <li>
                <a href="/admin/categories">Categories</a>
              </li>
              <li>
                <a href="/admin/comments">Comments</a>
              </li>
              <li><a href="/admin/tags">Tags</a></li>

              <li><a href="/admin/users">Users</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                >
                  Admin <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="/logout">
                      Logout
                    </a>

                    <form
                      id="logout-form"
                      action="/logout"
                      method="POST"
                      style="display: none;"
                    ></form>
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
                  Quo ut eius magni ut adipisci perspiciatis non maxime.
                  <small>by Prof. General Huel IV</small>

                  <a href="/admin/posts" class="btn btn-default pull-right"
                    >Go Back</a
                  >
                </h2>
              </div>

              <div class="panel-body">
                <p>
                  Animi praesentium ad ipsum adipisci cum ea rerum quasi. Harum
                  nam aliquid asperiores. Nesciunt natus rerum et ut ipsum.
                  Voluptas numquam et cumque et. Enim mollitia harum fugit
                  dignissimos id dignissimos tempore magnam. Suscipit sit est
                  reprehenderit consequatur perspiciatis id. Est ullam officiis
                  quia quibusdam sed magni ut dolor. Odit provident non
                  consequuntur est. Autem iure placeat corporis consequatur
                  aperiam ea. Et et officia velit sint aliquid. Harum labore aut
                  recusandae quo. Laborum voluptatem eos aperiam esse illum sit
                  magni. Consequatur ut praesentium velit praesentium aut aut ut
                  tempora. Aperiam quo assumenda itaque iusto nihil sunt non.
                  Occaecati id laudantium placeat nobis. Veritatis reiciendis
                  quaerat natus qui in. Fugit voluptate quaerat quibusdam.
                  Dignissimos perspiciatis dolores sint autem blanditiis saepe
                  ut et. Perspiciatis facilis ut omnis tempore eum rem omnis.
                  Molestiae dolorem sit magnam quo error dolores. Non sint
                  perferendis laboriosam hic. Sed molestiae ipsum ullam facere
                  porro. Dolor adipisci reiciendis et optio ullam quis qui ut.
                  Voluptatem voluptate at quia nihil eligendi saepe. Ratione
                  accusamus tempora non. Sunt qui commodi provident in quo. Qui
                  nostrum aut saepe vel.
                </p>

                <p><strong>Category: </strong>ipsum</p>
                <p><strong>Tags: </strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
