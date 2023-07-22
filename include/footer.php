<footer>
  <div class="container-fluid">
    <div class="text-center mb-2 mt-5">
      <p class="footer_content">Copyright © Designed & Developed by Shrinkcom Software pvt.ltd 2023</p>
    </div>
  </div>
</footer>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/new.js"></script>

<script>




  var sidebarLinks = document.querySelectorAll(".sidebar a");


  sidebarLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {



      var href = link.getAttribute("href");
      localStorage.setItem("activeLink", href);


      sidebarLinks.forEach(function(link) {
        link.classList.remove("active_new");
      });
      link.classList.add("active_new");
    });
  });

  var storedActiveLink = localStorage.getItem("activeLink");
  if (storedActiveLink) {

    var activeLink = document.querySelector('.sidebar a[href="' + storedActiveLink + '"]');
    if (activeLink) {
      activeLink.classList.add("active_new");
    }
  }

  // upload image
  function ekUpload() {
    function Init() {

      console.log("Upload Initialised");

      var fileSelect = document.getElementById('file-upload'),
        fileDrag = document.getElementById('file-drag'),
        submitButton = document.getElementById('submit-button');

      fileSelect.addEventListener('change', fileSelectHandler, false);

      // Is XHR2 available?
      var xhr = new XMLHttpRequest();
      if (xhr.upload) {
        // File Drop
        fileDrag.addEventListener('dragover', fileDragHover, false);
        fileDrag.addEventListener('dragleave', fileDragHover, false);
        fileDrag.addEventListener('drop', fileSelectHandler, false);
      }
    }

    function fileDragHover(e) {
      var fileDrag = document.getElementById('file-drag');

      e.stopPropagation();
      e.preventDefault();

      fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
    }

    function fileSelectHandler(e) {
 
      var files = e.target.files || e.dataTransfer.files;

 
      fileDragHover(e);


      for (var i = 0, f; f = files[i]; i++) {
        parseFile(f);
        uploadFile(f);
      }
    }


    function output(msg) {

      var m = document.getElementById('messages');
      m.innerHTML = msg;
    }

    function parseFile(file) {

      console.log(file.name);
      output(
        '<strong>' + encodeURI(file.name) + '</strong>'
      );


      var imageName = file.name;

      var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
      if (isGood) {
        document.getElementById('start').classList.add("hidden");
        document.getElementById('response').classList.remove("hidden");
        document.getElementById('notimage').classList.add("hidden");
        // Thumbnail Preview
        document.getElementById('file-image').classList.remove("hidden");
        document.getElementById('file-image').src = URL.createObjectURL(file);
      } else {
        document.getElementById('file-image').classList.add("hidden");
        document.getElementById('notimage').classList.remove("hidden");
        document.getElementById('start').classList.remove("hidden");
        document.getElementById('response').classList.add("hidden");
        document.getElementById("file-upload-form").reset();
      }
    }

    function setProgressMaxValue(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
        pBar.max = e.total;
      }
    }

    function updateFileProgress(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
        pBar.value = e.loaded;
      }
    }

    function uploadFile(file) {

      var xhr = new XMLHttpRequest(),
        fileInput = document.getElementById('class-roster-file'),
        pBar = document.getElementById('file-progress'),
        fileSizeLimit = 1024; // In MB
      if (xhr.upload) {
 
        if (file.size <= fileSizeLimit * 1024 * 1024) {
          // Progress bar
          pBar.style.display = 'inline';
          xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
          xhr.upload.addEventListener('progress', updateFileProgress, false);


          xhr.onreadystatechange = function(e) {
            if (xhr.readyState == 4) {
             
            }
          };

          // Start upload
          xhr.open('POST', document.getElementById('file-upload-form').action, true);
          xhr.setRequestHeader('X-File-Name', file.name);
          xhr.setRequestHeader('X-File-Size', file.size);
          xhr.setRequestHeader('Content-Type', 'multipart/form-data');
          xhr.send(file);
        } else {
          output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
        }
      }
    }


    if (window.File && window.FileList && window.FileReader) {
      Init();
    } else {
      document.getElementById('file-drag').style.display = 'none';
    }
  }
  ekUpload();
</script>
<script>
  $(document).ready(function() {
    $(".flip").click(function() {
      $(".panel").fadeToggle("slow");
    });
  });
  $(document).ready(function() {
    $(".flip2").click(function() {
      $(".panel2").fadeToggle("slow");
    });
  });
  $(document).ready(function() {
    $(".flip3").click(function() {
      $(".panel3").fadeToggle("slow");
    });
  });
  $('.toggle').click(function() {
    $('.logo').toggleClass('logo_min');
  })
</script>

<!-- chart -->
<script>
  const ctx = document.getElementById("chart").getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday",
        "Wednesday", "Thursday", "Friday", "Saturday"
      ],
      datasets: [{
        label: 'Last week',
        backgroundColor: '#F8B602',
        borderColor: 'rgb(235,87,87)',
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
          }
        }]
      }
    },
  });
</script>
<script>
  const ctx1 = document.getElementById("piechart").getContext('2d');
  const myChart2 = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "March", "April",
        "June", "July", "Agust"
      ],
      datasets: [{
        label: 'food Items',
        backgroundColor: '#F8B602',
        borderColor: 'rgb(235,87,87)',
        data: [300, 400, 200, 500, 800, 900, 200],
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
          }
        }]
      }
    },
  });
</script>
<script>
  const ctx2 = document.getElementById("doughnut").getContext('2d');
  const myChart3 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ["Chinese  Food", "Indain Food", "Baked Item", ],
      datasets: [{
        label: 'food Items',
        data: [50, 80, 90, ],
        backgroundColor: ["#F8B602", "rgb(235,87,87)", "#2ECC40", ]
      }]
    },
  });
</script>
<script>
 




  // Loop through the links

 
</script>
<!-- // uppload image -->






</body>

</html>