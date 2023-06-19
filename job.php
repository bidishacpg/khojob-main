<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Jobs Available</title>
    <link rel="stylesheet" href="jo.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Job</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--options-->
      <div class="option-box">
            <div class="dropdown">
                <select class="option-select" id="category" name="category">
                    <option>Job Category</option>
                    <option>Education</option>
                    <option>Finance</option>
                    <option>Social</option>

                </select>
                <select class="option-select" id="job-level" name="job-level">
                    <option>Job Level</option>
                    <option>Entry</option>
                    <option>Mid-senior</option>
                    <option>Director</option>
              </select>
              <select class="option-select" id="job-Types" name="job-Types">
                    <option>Job Types</option>
                    <option>Part-time</option>
                    <option>Full-time</option>
                    <option>Internship</option>
              </select>
              <select id="Location" name="Location"  class="filter-select">
                    <option>Location</option>
                    <option>kathmandu</option>
                    <option>Chitwan</option>
                    <option>pokhara</option>
                    <option>butwal</option>
                 </select>

             </div>
</div>
      </li>
</ul>
</nav>
</div>
</body>
</html>