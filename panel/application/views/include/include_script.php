<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url("assets/")?>plugins/jQuery/jquery-2.2.3.min.js"></script>


<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url("assets/")?>bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url("assets/")?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("assets/")?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("assets/")?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url("assets/")?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("assets/")?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url("assets/")?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url("assets/")?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("assets/")?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("assets/")?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/")?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/")?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("assets/")?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/")?>dist/js/demo.js"></script>
<script src="<?php echo base_url("assets/")?>plugins/fullcalendar/fullcalendar.min.js"></script>

<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>
