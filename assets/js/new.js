$(document).ready(function() {
  $('ul li a').click(function() {
    $('li a').removeClass("active_new");
    $(this).addClass("active_new");
  });
});

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });

$(document).ready(function () {
    $('#data').DataTable();
});
$(document).ready(function() {
  $("#heart").click(function() {
    if ($("#heart").hasClass("liked")) {
      $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
      $("#heart").removeClass("liked");
    } else {
      $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
      $("#heart").addClass("liked");
    }
  });
});
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};



  
  //  const update = () => {
    circles.forEach((circle, i) => {
      i < currActive ?
        circle.classList.add("active") :
        circle.classList.remove("active");
    });

    const actives = document.querySelectorAll(".active");
    const width = ((actives.length - 1) / (circles.length - 1)) * 100;
    progress.style.width = `${width}%`;

    if (currActive === 1) {
      prev.disabled = true;
    } else if (currActive === circles.length) {
      next.disabled = true;
    } else {
      prev.disabled = false;
      next.disabled = false;
    }
  

  let currActive = 1;

  next.addEventListener("click", () => {
    currActive++;

    if (currActive > circles.length) {
      currActive = circles.length;
    }
    update();
  });
  prev.addEventListener("click", () => {
    currActive--;

    if (currActive < 1) {
      currActive = 1;
    }
    update();
  });
  // var list = document.getElementById('progress'),
  //   next = document.getElementById('next'),
  //   clear = document.getElementById('clear'),
  //   children = list.children,
  //   completed = 0;

  // simulate activating a node
  next.addEventListener('click', function() {

    // count the number of completed nodes.
    completed = (completed === 0) ? 1 : completed + 2;
    if (completed > children.length) return;

    // for each node that is completed, reflect the status
    // and show a green color!
    for (var i = 0; i < completed; i++) {
      children[i].children[0].classList.remove('grey');
      children[i].children[0].classList.add('green');

      // if this child is a node and not divider, 
      // make it shine a little more
      if (i % 2 === 0) {
        children[i].children[0].classList.add('activated');
      }
    }

  }, false);

  // clear the activated state of the markers
  clear.addEventListener('click', function() {
    for (var i = 0; i < children.length; i++) {
      children[i].children[0].classList.remove('green');
      children[i].children[0].classList.remove('activated');
      children[i].children[0].classList.add('grey');
    }
    completed = 0;
  }, false);
  var a = document.getElementById("blah");

  function readUrl(input) {
    if (input.files) {
      var reader = new FileReader();
      reader.readAsDataURL(input.files[0]);
      reader.onload = (e) => {
        a.src = e.target.result;
      }
    }
  }

  var inputFile = document.getElementById("inputFile");
  removeImg = () => {
    a.src = "http://placehold.it/180";
    inputFile.value = "";
  }
  // 
  jQuery(document).ready(function() {

    $(".chat-list a").click(function() {
      $(".chatbox").addClass('showbox');
      return false;
    });

    $(".chat-icon").click(function() {
      $(".chatbox").removeClass('showbox');
    });


  });
 
  var loadFile = function(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  // 
 
// chart
  // 
 