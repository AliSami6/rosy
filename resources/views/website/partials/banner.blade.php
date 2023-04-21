@foreach($banners as $banner)
        <header class="header">
            <div class="overlay">
                <img src="/bannerimage/{{$banner->image}}" alt="banner image" class="logo">
                <h1 class="subtitle"> {{$banner->subtitle}} </h1>
                <h1 class="title">{{$banner->title}} </h1> 
                <a class="btn btn-primary mt-3" href="#book-table">Book A Table</a> 
            </div>      
        </header>
 @endforeach