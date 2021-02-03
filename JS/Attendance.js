$(document).ready(function() {
  $('#M').hide();
  $('#C').hide();
  $('#captcha_error').hide();
  $('#main').focus();
});
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function clear_views(view) {
  if(view == 'm') {
    $('#stu_infoM').empty();
    $('#attendance_data_headM').empty();
    $('#attendance_dataM').empty();
    $('#chart-month').empty();
  } else if(view == 'c') {
    $('#stu_infoC').empty();
    $('#attendance_data_headC').empty();
    $('#attendance_dataC').empty();
    $('#chart-consolidated').empty();
  }
}
$('#btn_monthwise').click(function() {
  $('#captcha_error').hide();
  $('#btn_consolidated').removeClass('btn-primary')
  if($('#btn_monthwise').hasClass('btn-primary')) {
    $('#btn_monthwise').removeClass("btn-primary");
  } else {
    $('#btn_monthwise').addClass("btn-primary");
  }
  $('#M').hide();
  $('#roll_noC').val('');
  $('#consolidated').collapse('hide');
  clear_views('c');
});
$('#btn_consolidated').click(function() {
  $('#captcha_error').hide();
  $('#btn_monthwise').removeClass('btn-primary')
  if($('#btn_consolidated').hasClass('btn-primary')) {
    $('#btn_consolidated').removeClass("btn-primary");
  } else {
    $('#btn_consolidated').addClass("btn-primary");
  }
  $('#C').hide();
  $('#roll_noM').val('');
  $('#monthM').prop('selectedIndex', 0);
  $('#monthwise').collapse('hide');
  clear_views('m');
});

function toArr(class_name) {
  var sum = 0;
  $("tbody tr td." + class_name).each(function() {
    sum += parseInt($(this).text());
  });
  return sum;
}

function idify(s) {
  return s.split(' ').join('_');
}
var months = {
  'jan': "January",
  'feb': "February",
  'mar': "March",
  'apr': "April",
  'may': "May",
  'jun': "June",
  'jul': "July",
  'aug': "August",
  'sep': "September",
  'oct': "October",
  'nov': "November",
}
$('#roll_noM').on('change', function() {
  $("#monthM").prop('selectedIndex', 0);
  $('#subjectDropdownMonthwise').empty().append('<option disabled selected>Subject</option>');
});
$('#monthM').on('change', function() {
  //Empty subjects dropdown when month is changed
  $('#subjectDropdownMonthwise').empty().append('<option disabled selected>Subject</option>');
  var roll_no = $('#roll_noM').val();
  var rollRegex = /^[0-9]{4}$/;
  if(!rollRegex.test(roll_no)) {
    $('#M').show();
    return 0;
  } else {
    $('#M').hide();
  }
  var month = $(this).val();
  $.ajax({
    type: 'POST',
    url: 'http://keshav.du.ac.in/stu-attendance/subjects',
    data: {
      roll_no: roll_no,
      month: month,
    },
    success: function(data) {
      if(data.length > 0) {
        var result = $.parseJSON(data);
        // console.log(result.length);
        if(result.length > 0) {
          $('#subjectDropdownMonthwise').empty().append('<option disabled selected>Subject</option>');
          if(result.length > 1) {
            $('#subjectDropdownMonthwise').append('<option value="allM">All Subjects</option>');
            $.each(result, function(i, d) {
              $('#subjectDropdownMonthwise').append('<option value="' + d.paper_name + '">' + d.paper_name + '</option>');
            });
          } else {
            //When attendance is available for a single subject, show that subject only
            $('#subjectDropdownMonthwise').append('<option value="' + result[0].paper_name + '">' + result[0].paper_name + '</option>');
          }
        } else {
          clear_views('m');
          alert("No record found");
        }
      }
    }
  });
});
$('#submitM').click(function() {
  $('#stu_infoM').empty();
  $('#attendance_data_headM').empty();
  $('#attendance_dataM').empty();
  $('#chart-month').empty();
  var roll_no = $('#roll_noM').val();
  var rollRegex = /^[0-9]{4}$/;
  if(!rollRegex.test(roll_no)) {
    $('#M').show();
    return 0;
  } else {
    $('#M').hide();
  }
  var month = $('#monthM').val();
  var paper_name = $('#subjectDropdownMonthwise').val();
  $.ajax({
    type: 'POST',
    url: 'http://keshav.du.ac.in/stu-attendance/month',
    data: {
      roll_no: roll_no,
      month: month,
      paper_name: paper_name
    },
    success: function(data) {
      let temp = $.parseJSON(data);
      if(!("error" in temp)) {
        let result = temp.att;
        let student = temp.student;
        $('#stu_infoM').empty();
        var stu_info = "<div class='row text-left'>" + "<div class='col-md-6 col-sm-12'>" + "<b>Name: </b>" + student.fullname + "</div>" + "<div class='col-md-6 col-sm-12'>" + "<b>Roll Number: </b>" + student.roll_no + "</div> </div><div class='row text-left'>" + "<div class='col-md-6 col-sm-12'>" + "<b>Section: </b>" + student.section + "</div>" + "<div class='col-md-6 col-sm-12'>" + "<b>Course: </b>" + student.course_name + "</div> </div>" + "<div class='text-left'>" + "<b>Month: </b>" + months[month] + "</div>";
        $('#stu_infoM').append(stu_info);
        let data = {};
        $('#chart-month').empty();
        $('#attendance_data_headM').empty();
        var txt_head = '<tr ><th >Paper Name</th>';
        txt_head += '<th >Total Lectures</th><th >Lectures Attended</th>';
        txt_head += '<th >Total Practicals</th><th >Practicals Attended</th>';
        txt_head += '<th >Total Tutorials</th><th >Tutorials Attended</th>';
        txt_head += '</tr>';
        $('#attendance_data_headM').append(txt_head);
        $('#attendance_dataM').empty();
        var txt_box = "";
        $.each(result, function(i, d) {
          txt_box += "<tr class='p-0'><td >" + d.paper_name + "</td>" + "<td class=' TL_M'>" + d.TL + "</td><td class=' LA_M'>" + d.LA + "</td>" + "<td class=' TP_M'>" + d.TP + "</td><td class=' PA_M'>" + d.PA + "</td>" + "<td class=' TT_M'>" + d.TT + "</td><td class=' TA_M'>" + d.TA + "</td></tr>";
          data[i] = {
            'paper_name': d.paper_name,
            'lecture': {
              'val': calculatePercent(d.LA, d.TL),
              'color': '#f44336'
            },
            'practical': {
              'val': calculatePercent(d.PA, d.TP),
              'color': '#ff9800'
            },
            'tutorial': {
              'val': calculatePercent(d.TA, d.TT),
              'color': '#9c27b0'
            },
          };
        });
        $('#attendance_dataM').append(txt_box);
        var TL = toArr('TL_M');
        var LA = toArr('LA_M');
        var TP = toArr('TP_M');
        var PA = toArr('PA_M');
        var TT = toArr('TT_M');
        var TA = toArr('TA_M');
        var lectA = calculatePercent(LA, TL);
        var pracA = calculatePercent(PA, TP);
        var tutA = calculatePercent(TA, TT);
        var lecColor = getColor(lectA);
        var pracColor = getColor(pracA);
        var tutColor = getColor(tutA);
        var txt_att = "";
        txt_att += "<tr class='text-light'><td class='text-body'>TOTAL</td>" + "<td bgcolor='" + lecColor + "'>" + TL + "</td><td bgcolor='" + lecColor + "'>" + LA + "</td>" + "<td bgcolor='" + pracColor + "'>" + TP + "</td><td bgcolor='" + pracColor + "'>" + PA + "</td>" + "<td bgcolor='" + tutColor + "'>" + TT + "</td><td bgcolor='" + tutColor + "'>" + TA + "</td></tr>" + "<tr class='text-light'><td class='text-body'>PERCENTAGE</td>" +
          //Percentage Attendance
          "<td bgcolor='" + lecColor + "' colspan='2'>" + lectA + "%</td>" + "<td bgcolor='" + pracColor + "' colspan='2'>" + pracA + "%</td>" + "<td bgcolor='" + tutColor + "' colspan='2'>" + tutA + "%</td></tr>";
        $('#attendance_dataM').append(txt_att);
      } else {
        alert('No record found');
        clear_views('c');
      }
    }
  });
});

function calculatePercent(a, b) {
  var result = parseInt(((a / b) * 100).toFixed(1));
  // console.log(result);
  if(isNaN(result) || result == null) {
    return 0;
  } else {
    return result;
  }
}

function getColor(value) {
  var val = parseInt(value)
  if(isNaN(val)) {
    return '#f44336';
  }
  if(val < 40) {
    return '#f44336';
  } else if(val >= 40 && val < 67) {
    return '#ff9800';
  } else if(val >= 67) {
    return '#4CAF50';
  }
}

function getUniquePapers(data) {
  let m = {};
  $(data).each((i, e) => {
    let prop = e.paper_name;
    if(prop in m) m[prop].push(e);
    else m[prop] = [e];
  });
  return m;
}
var monthval = {
  'jan': 0,
  'feb': 1,
  'mar': 2,
  'apr': 3,
  'may': 4,
  'jun': 5,
  'jul': 6,
  'aug': 7,
  'sep': 8,
  'oct': 9,
  'nov': 10,
  'dec': 11
};
$('#submitC').click(function() {
  $('#stu_infoC').empty();
  $('#attendance_data_headC').empty();
  $('#attendance_dataC').empty();
  $('#chart-consolidated').empty();
  var roll_no = $('#roll_noC').val();
  var rollRegex = /^[0-9]{4}$/;
  if(!rollRegex.test(roll_no)) {
    $('#C').show();
    return 0;
  } else {
    $('#C').hide();
  }
  $.ajax({
    type: 'POST',
    url: 'http://keshav.du.ac.in/stu-attendance/consolidated',
    data: {
      roll_no: roll_no
    },
    success: function(data) {
      $('#stu_infoC').empty();
      var response = $.parseJSON(data);
      if(response.error == true) {
        alert('No record found');
        clear_views('c');
        return 0;
      }
      let result = response.att;
      let c_percent = response.percent;
      let studentDetail = response.student;
      var stu_info = "<div class='row text-left'>" + "<div class='col-md-6 col-sm-12'>" + "<b>Name: </b>" + studentDetail.fullname + "</div>" + "<div class='col-md-6 col-sm-12'>" + "<b>Roll Number: </b>" + studentDetail.roll_no + "</div> </div>" + "<div class='row text-left'>" + "<div class='col-md-6 col-sm-12'>" + "<b>Section: </b>" + studentDetail.section + "</div>" + "<div class='col-md-6 col-sm-12 '>" + "<b>Course: </b>" + studentDetail.course_name + "</div></div>";
      $('#stu_infoC').append(stu_info);
      $('#chart-consolidated').empty();
      $('#attendance_data_headC').empty();
      var txt_head = '<tr><th >Paper Name</th><th>Month</th>' + '<th >Total Lectures</th><th >Lectures Attended</th>' + '<th >Total Practicals</th><th >Practicals Attended</th>' + '<th >Total Tutorials</th><th >Tutorials Attended</th>' + '<th>Subjectwise Percentage</th></tr>';
      $('#attendance_data_headC').append(txt_head);
      $('#attendance_dataC').empty();
      var papers = getUniquePapers(result);
      // console.log(papers);
      var visited = {};
      var percentVisited = {};
      $.each(papers, function(i, d) {
          visited[d.paper_name] = false;
          // console.log(visited);
          percentVisited[d.paper_name] = false;
          d.sort(function(a, b) {
            return monthval[a.month] - monthval[b.month];
          });
        })
        // console.log(visited);
      var txt_box = "";
      // i => Paper Name
      $.each(papers, function(i, d) {
        // txt_box += "<tr>";
        if(!visited[i]) {
          txt_box += "<tr><td rowspan='" + papers[i].length + "'>" + i + "</td>";
          visited[i] = true;
        }
        $.each(d, function(x, val) {
          if(!visited[i]) {
            txt_box += "<tr>";
            visited[i] = false;
          }
          txt_box += "<td >" + months[val.month].trim() + "</td>" + "<td class=' TL_C " + idify(i) + "'>" + val.TL + "</td><td class=' LA_C " + idify(i) + "'>" + val.LA + "</td>" + "<td class=' TP_C " + idify(i) + "'>" + val.TP + "</td><td class=' PA_C " + idify(i) + "'>" + val.PA + "</td>" + "<td class=' TT_C " + idify(i) + "'>" + val.TT + "</td><td class=' TA_C " + idify(i) + "'>" + val.TA + "</td>";
          if(!percentVisited[i]) {
            txt_box += "<td class='text-light border border-dark' rowspan='" + papers[i].length + "' bgcolor='" + getColor(c_percent[i].theory) + "'>" + c_percent[i].theory + "%</td>";
            visited[i] = true;
            percentVisited[i] = true;
          }
          txt_box += "<tr>";
        });
      });
      $('#attendance_dataC').append(txt_box);
      var TL = toArr('TL_C');
      var LA = toArr('LA_C');
      var TP = toArr('TP_C');
      var PA = toArr('PA_C');
      var TT = toArr('TT_C');
      var TA = toArr('TA_C');
      var lectA = calculatePercent(LA, TL);
      var pracA = calculatePercent(PA, TP);
      var tutA = calculatePercent(TA, TT);
      var lecColor = getColor(lectA);
      var pracColor = getColor(pracA);
      var tutColor = getColor(tutA);
      var txt_att = "";
      txt_att += "<tr class='text-light'><td class='text-body' colspan='2'>TOTAL ATTENDANCE</td>" + "<td bgcolor='" + lecColor + "'>" + TL + "</td><td bgcolor='" + lecColor + "'>" + LA + "</td>" + "<td bgcolor='" + pracColor + "'>" + TP + "</td><td bgcolor='" + pracColor + "'>" + PA + "</td>" + "<td bgcolor='" + tutColor + "'>" + TT + "</td><td bgcolor='" + tutColor + "'>" + TA + "</td>" +
        // "<td></td>"+
        "</tr>" +
        //Attendance Lecture
        "<tr class='text-light'><td class='text-body' colspan='2'>PERCENTAGE</td>" + "<td bgcolor='" + lecColor + "' colspan='2'>" + lectA + "%</td>" + "<td bgcolor='" + pracColor + "' colspan='2'>" + pracA + "%</td>" + "<td bgcolor='" + tutColor + "' colspan='2'>" + tutA + "%</td>" +
        // "<td></td>"+
        "</tr>" + "<tr style='border:0;'><td colspan='9' style='border:0;'><p class='text-danger'>*In case of duplicate records, inform in computer science Lab 3.</p></td></tr>";
      $('#attendance_dataC').append(txt_att);
    }
  });
});