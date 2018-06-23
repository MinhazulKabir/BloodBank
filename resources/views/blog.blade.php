@extends('layouts.home')

@section('main')



    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="padding:25px;">
                <h2 data-bs-hover-animate="pulse">Recent Posts of <strong>Blog</strong>:</h2>
                </div>
                <div class="col-lg-4" style="padding:30px;">

                    {{Form::open(['route'=>'blog.index', 'method'=>'GET', 'class'=>'class_name' ])}}
                    {{Form::text('search')}}
                    {{Form::submit('Search')}}
                    {{Form::close()}}


                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="intro">
                <p>
                    ব্লগ শব্দটি ইংরেজি Blog এর বাংলা প্রতিশব্দ, যা এক ধরণের অনলাইন ব্যক্তিগত দিনলিপি বা ব্যক্তিকেন্দ্রিক পত্রিকা। ইংরেজি Blog শব্দটি আবার Weblog এর সংক্ষিপ্ত রূপ। যিনি ব্লগে পোস্ট করেন তাকে ব্লগার বলা হয়। ব্লগাররা প্রতিনিয়ত তাদের ওয়েবসাইটে কনটেন্ট যুক্ত করেন আর ব্যবহারকারীরা সেখানে তাদের মন্তব্য করতে পারেন। এছাড়াও সাম্প্রতিক কালে ব্লগ ফ্রিলান্স সাংবাদিকতার একটা মাধ্যম হয়ে উঠছে। সাম্প্রতিক ঘটনাসমূহ নিয়ে এক বা একাধিক ব্লগার রা এটি নিয়মিত হালনাগাদ করেন।
                </p>
				
            </div>
            <div class="row projects" style="padding-bottom: 20px" >
			
                @foreach($blog as $blogging)

                <div class="col-sm-6 col-lg-4 btn-outline-light rounded"   >
                    <a href="{{ route('blog.show', [$blogging->id])  }}">
                    <img class="img-fluid rounded" src="{!!  $blogging->blog_picture !!}">
                    <h4 class="name" style="padding-bottom: 30px">
                         {{ $blogging->head_line }}
                    </h4>
                    <!---MainPost   {!!  $blogging->post !!}    MainPost-->
                    </a>
                </div>
                @endforeach
            </div>
        </div>

@endsection