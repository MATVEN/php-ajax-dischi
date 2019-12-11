function printData() {

  var target = $('#container')

  var source = $("#hb-template").html();
  var sourceTransfert = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {

    var record = data[i];

    var compiledRecord = sourceTransfert(match);

    target.append(compiledRecord);

  }
};

$(document).ready(function () {

  $.ajax({
    url: "getAllRecord.php",
    method: "GET",
    success: function(data) {

        printData(data);

    },
    error: function(error) {
      console.log("error", error);
    }
  });

})
