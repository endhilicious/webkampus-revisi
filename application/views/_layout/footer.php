<footer>
    <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
    </div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?=assets_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?=assets_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?=assets_url()?>vendor/chartist/js/chartist.min.js"></script>
<script src="<?=assets_url()?>vendor/raphael/raphael.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery-mapael/js/jquery.mapael.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery-mapael/js/maps/world_countries.min.js"></script>
<script src="<?=assets_url()?>vendor/datatables/js-main/jquery.dataTables.min.js"></script>
<script src="<?=assets_url()?>vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
<script src="<?=assets_url()?>vendor/datatables-tabletools/js/dataTables.tableTools.js"></script>
<script src="<?=assets_url()?>scripts/klorofilpro-common.js"></script>
<!-- DEMO PANEL -->
<!-- for demo purpose only, you should remove it on your project directory -->
<script type="text/javascript">
var toggleDemoPanel = function(e) {
    e.preventDefault();

    var panel = document.getElementById('demo-panel');
    if (panel.className) panel.className = '';
    else panel.className = 'active';
}

// fix each iframe src when back button is clicked
$(function() {
    $('iframe').each(function() {
        this.src = this.src;
    });
});



});
</script>
<script>
$(function() {
    var options;

    var data = {
        labels: ['I/a', 'I/b', 'II/a', 'II/b', 'III/a', 'III/b', 'IV/a', 'IV/b'],
        series: [
            [200, 380, 350, 320, 410, 450, 570, 400],
        ]
    };

    var data2 = {
        labels: ['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'],
        series: [
            [200, 380, 350, 320, 410, 450, 570, 400, 555, 620],
        ]
    };

    // bar chart
    options = {
        height: "300px",
        axisX: {
            showGrid: false
        },
    };

    new Chartist.Bar('#demo-bar-chart', data, options);



    new Chartist.Bar('#demo-bar-chart2', data2, options);

});
</script>
</body>

</html>
