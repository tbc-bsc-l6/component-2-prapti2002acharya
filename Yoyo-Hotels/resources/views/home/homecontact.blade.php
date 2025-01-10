

 
 <!-- Contact Section Begin -->
 <section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
                    <h2>Contact Info</h2>
                    <p>Situated in the heart of City of Kandy, the Grand Kandyan is the perfect heaven for those with time to explore Kandyan warm hospitality and diverse cultures</p>
                    <table>
                        <tbody>
                            <tr>
                                <td class="c-o">Address:</td>
                                <td>89/10, Lady Gordon's Drive, Kandy, Sri Lanka</td>
                            </tr>
                            <tr>
                                <td class="c-o">Phone:</td>
                                <td>(+94) 081 2030400-5</td>
                            </tr>
                            <tr>
                                <td class="c-o">Email:</td>
                                <td>info@grandkandyan.com</td>
                            </tr>
                            <tr>
                                <td class="c-o">Fax:</td>
                                <td>(+94) 081 2030407</td>
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
                            <button type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.633036229083!2d80.6161893347656!3d7.3027672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae367d41f12a0d7%3A0xd4e83ca0770bf364!2sThe%20Grand%20Kandyan%20Hotel!5e0!3m2!1sen!2slk!4v1717250182167!5m2!1sen!2slk"
                height="470" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- Contact Section End -->