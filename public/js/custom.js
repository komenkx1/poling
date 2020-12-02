    
		$(document).ready(function () {


            
	var isSubmitted = false;
	var btnSubmitModal = $('#btn-modal-submit');
	var btnSubmit = $('#btn-submit');
	var btnSee = $('#btn-See');
	btnSee.hide();
	
	btnSubmitModal.click(function () {
	btnSubmit.fadeOut();
	btnSee.fadeIn();
	isSubmitted = true;
	});
		});
	
		  var ctx = document.getElementById('smft');
		  var ctx2 = document.getElementById('bpmft');
		  var datasmft = {
  labels: ["Sipil", "Mesin", "Elektro", "Arsitek", "TI"],
  datasets: [{
    label: "Paslon 1",
	backgroundColor: 'rgba(255, 99, 132, 0.2)',
	borderColor:'rgba(255, 99, 132, 1)',
	borderWidth: 1,
    data: [3, 7, 4, 8,2]
  }, {
    label: "Paslon 2",
	backgroundColor: 'rgba(54, 162, 235, 0.2)',
	borderColor: 'rgba(54, 162, 235, 1)',
	borderWidth: 1,
    data: [4, 3, 5, 22,5]
  },{
    label: "Paslon 3",
	backgroundColor: 'rgba(14, 255, 108, 0.2)',
	borderColor: 'rgba(54, 235, 65)',
	borderWidth: 1,
    data: [4, 3, 2, 93,5]
  }]
};

var databpmft = {
    labels: ["Sipil", "Mesin", "Elektro", "Arsitek", "TI"],
    datasets: [{
      label: "Paslon 1",
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor:'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [34, 11, 4, 8,2]
    }, {
      label: "Paslon 2",
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      data: [44, 3, 25, 22,5]
    }]
  };
		  var myChart = new Chart(ctx, {
    type: 'bar',
    data:datasmft,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var myChart = new Chart(ctx2, {
    type: 'bar',
    data: databpmft,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
				

var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
var scrolled = $(window).scrollTop();
$('.jumbotron').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
parallax();
});