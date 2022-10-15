
  <section class="contact section-padding">
    <div class="container">
      <div class="contact-card">
        <h2 class="color-primary">Have any questions?</h2>
        <small>Feel free to reach out to us! If you prefer to email
          zach@unrealsensei.com</small>

        <form class="mt-5" action="{{route('contactus.store')}}" method="post">
            @csrf
          <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Full Name</label>
            <input name="name" type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp"
              placeholder="John Doe" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="example@mail.com" />
          </div>
          <div class="mb-3">
            <label for="floatingTextarea2" class="form-label">Comments</label>
            <textarea name="message" class="form-control" placeholder="Leave a message here" id="floatingTextarea2"
              style="height: 100px"></textarea>
          </div>
          <button type="submit" class="btn bg-primarycolor text-white" style="background-color: var(--primary-color)">
            Send
          </button>
        </form>
      </div>
    </div>
  </section>