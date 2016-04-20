<div class="page-header text-center entreBottom">
  <h1>Contact us</h1>
</div>
<div class="row">
    <div class="col-md-4">
        <form>
            <legend><span class="glyphicon glyphicon-globe"></span>EntrePOWER</legend>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:entrepower@gmail.com">entrepower@gmail.com</a>
            </address>
        </form>
    </div>
        <div class="col-md-8">
            <div class="well well-sm">
                <?php echo form_open('power/sendContactEmail'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                School Affiliation</label>
                                <input type="text" class="form-control" name="school" placeholder="Enter School" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                Phone(Optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span>
                                </span>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone(Optional)"/></div>
                        </div>
                        <div class="form-group">
                        <label for="option">
                                Best way to reach you</label><br />
                        <label class="radio-inline">
                          <input type="radio" name="method" value="email" checked="checked">Email
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="method" value="phone ">Phone
                        </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="message">
                                Message</label>
                            <textarea name="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn entrePOWERColor pull-right sharp" onclick="verifyContactMessage" id="btnContactUs">Send Message</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
       
    </div>