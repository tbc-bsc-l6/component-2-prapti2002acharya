

 
 <!-- Contact Section Begin -->
 <section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
                    <h2>Contact Info</h2>
                    <p>Situated in the Queens of Hill of Illam, the YoYo Hotel is the perfect heaven for those with time to explore Illam and eastern hilly region of nepal warm hospitality and diverse cultures</p>
                    <table>
                        <tbody>
                            <tr>
                                <td class="c-o">Address:</td>
                                <td>Kanyam Main Chowk, Illam, Koshi, Nepal</td>
                            </tr>
                            <tr>
                                <td class="c-o">Phone:</td>
                                <td>+977 9824305625</td>
                            </tr>
                            <tr>
                                <td class="c-o">Email:</td>
                                <td>info@yoyohotels.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">

                @if(@session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-bs-dismiss='alert'>X</button>
                
                {{session()->get('message')}}
                </div>
                   
                @endif

                <form action="{{url('contact')}}" class="contact-form" method="POST">

                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input style="color: black;" type="text" name="name" placeholder="Your Name" required
                            @if(Auth::id())
                            value="{{Auth::user()->name}}">
                            @endif
                                    
                        </div>
                        <div class="col-lg-6">
                            <input style="color: black;" type="text" name="email" placeholder="Your Email" required
                            @if(Auth::id())
                            value="{{Auth::user()->email}}">
                            @endif
                        </div>
                        <div class="col-lg-12">
                            <textarea style="color: black;" placeholder="Your Message" name="message" required></textarea>
                            <button type="submit" style="background-color: blue;">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28474.949992841455!2d88.06093428788371!3d26.860023057399953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5c9143e387c25%3A0x1692bcb2d9b11636!2sKanyam!5e0!3m2!1sen!2snp!4v1737358834254!5m2!1sen!2snp"
                height="470" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- Contact Section End -->