@extends('layouts.home')

@section('main')


    <div class="col-lg-12 col-xl-10 offset-lg-2 offset-xl-1 text-center">
        <img class="img-fluid rounded" src="/{!!  $blog->blog_picture !!}" >
    </div>

    <div class="col-lg-12">
        <blockquote class="blockquote">
            <h3 class="mb-0">
                {{ $blog->head_line }}
            </h3>
            <footer class="blockquote-footer">
                Posted at  <cite> {{ $blog->created_at }} </cite>
            </footer>
        </blockquote>

            {!!  $blog->post !!}

        <!-- Facebook Comment-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=339822573221770&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Facebook Comment-->
        <div class="fb-comments" data-href="{{ route('blog.show', [$blog->id])  }}" data-numposts="5">

        </div>

    </div>

@endsection
