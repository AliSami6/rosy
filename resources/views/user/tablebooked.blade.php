<section id="book-table" class="bg-white">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <img src="assets/imgs/contact.jpg" alt="contact image" class="w-100 rounded shadow">
            </div>
                
            <div class="col-md-6">

                <form  action="{{url('tablebooked')}}" method="POST">     
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control"  name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="seats" placeholder="Seats">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="background-color:#bc8c4c;">Book A Table</button>
                    <small class="form-text text-muted mt-3">We don't span customers. Check our <a href="#">Privacy Policy</a></small>
                </form>
            </div>
        </div>
    </div>
</section>