<footer id="footer" class="container-fluid">

  {{-- Blue Bar --}}
  <div class="row" style="background: none; background-color: #477e9f; padding: 25px">
    <div class="col-md-8" style="text-align: center; color: #fff; font-size: 1.2em">
      <h4 class="tk-seravek-web">The word of the Lord sounded forth...</h4>
      <p><em>1 Thessalonians 1:8</em></p>
    </div>
    <div class="col-md-4" style="text-align: center">
      <a href="{{ route('give') }}" title="Give" class="btn btn-default" role="button"
             style="background-color: #8ac9ee; color: 000; border: none; width: 200px; padding: 15px">Give</a>
    </div>
  </div>

  <div class="row" style="  background: #262626; color: #777; padding: 40px; line-height: 2em">

    {{-- Compass Bible Church --}}
    <div class="col-md-3">
      <h4 style="color: #FFF;" class="tk-seravek-web">Compass Bible Church</h4>
      <p>Compass Bible Church exists to make disciples of Christ by <strong>reaching</strong> as many people
              as possible for Christ, <strong>teaching</strong> them to be like Christ, and
              <strong>training</strong> them to serve Christ.</p>
      <p><a href="/sermons/our-missions-statement">Our Mission Statement</a></p>
    </div>

    {{-- Ministries --}}
    <div class="col-md-3">
      <h4 style="color: #FFF;" class="tk-seravek-web">Ministries</h4>

      <p><a href="{{ route('sundayschool') }}">Adult Sunday School</a><br/>
      <a href="{{ route('kids') }}">Kids Ministry</a><br/>
      <a href="{{ route('youth') }}">Youth Ministry</a><br/>
      <a href="https://www.facebook.com/collegecompassHB">College Ministry</a>
      </p><br/>

      <h4 style="color: #FFF;" class="tk-seravek-web">Mobile App</h4>
      <p>Download the CompassHB app on your phone.<br/>
      <a href="https://appsto.re/us/n_WA6.i">CompassHB for iPhone</a><br/>
      <a href="https://play.google.com/store/apps/details?id=com.compasshb.mobile">CompassHB for Android</a></p>

    </div>
    <div class="col-md-3"></div>

    {{-- Contact Us --}}
    <div class="col-md-3">
      <h4 style="color: #FFF;" class="tk-seravek-web">Contact Us</h4>
      <p>Compass Bible Church<br/>
      <i class="glyphicon glyphicon-globe"></i> 5082 Argosy, Huntington Beach, CA 92649<br/>
      <i class="glyphicon glyphicon-phone"></i> (714) 895-0034<br/>
      <i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@compasshb.com">info@compasshb.com</a></p>
    </div>
  </div>
  <div class="row" style="padding: 15px;
                          background-image: url('/images/lineofmanycolors.png');
                          background-repeat: repeat-x;
                          background-size: 850px;
                          background-color: #222;
                          background-position: center bottom;
                          min-height: 50px; color: #999;
                          font-size: 0.923em; ">
    <span>© 2014-{{ date('Y') }} Compass Bible Church Huntington Beach. All Rights Reserved.</span>
    <span style="float: right;">
      <span class="tk-seravek-web">Follow Us</span>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://www.facebook.com/compasshb" title="Facebook"><span class="fa fa-facebook"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://instagram.com/compasshb" title="Instagram"><span class="fa fa-instagram"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://twitter.com/compasshb" title="Twitter"><span class="fa fa-twitter"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://vimeo.com/compasshb" title="Vimeo"><span class="fa fa-vimeo-square"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://github.com/compasshb">Designed in Huntington Beach</a>
    </span>
  </div>
</footer>

@include('layouts.scripts')

</body>
</html>
