$(window).on("load", function() {
    $("#demo-foo-row-toggler").footable(), $("#demo-foo-accordion").footable().on("footable_row_expanded", function(a) {
        $("#demo-foo-accordion tbody tr.footable-detail-show").not(a.row).each(function() {
            $("#demo-foo-accordion").data("footable").toggleDetail(this)
        })
    }), $("#demo-foo-pagination").footable(), $("#demo-show-entries").change(function(a) {
        a.preventDefault();
        var b = $(this).val();
        $("#demo-foo-pagination").data("page-size", b), $("#demo-foo-pagination").trigger("footable_initialized")
    });
    var a = $("#demo-foo-filtering");
    a.footable().on("footable_filtering", function(a) {
        var b = $("#demo-foo-filter-status").find(":selected").val();
        a.filter += a.filter && a.filter.length > 0 ? " " + b : b, a.clear = !a.filter
    }), $("#demo-foo-filter-status").change(function(b) {
        b.preventDefault(), a.trigger("footable_filter", {
            filter: $(this).val()
        })
    }), $("#demo-foo-search").on("input", function(b) {
        b.preventDefault(), a.trigger("footable_filter", {
            filter: $(this).val()
        })
    });
    var b = $("#demo-foo-addrow");
    b.footable().on("click", ".demo-delete-row", function() {
        var a = b.data("footable"),
            c = $(this).parents("tr:first");
        a.removeRow(c)
    }), $("#demo-input-search2").on("input", function(a) {
        a.preventDefault(), b.trigger("footable_filter", {
            filter: $(this).val()
        })
    }), $("#demo-btn-addrow").click(function() {
        var a = b.data("footable"),
            c = '<tr><td style="text-align: center;"><button class="demo-delete-row btn btn-danger btn-xs btn-icon fa fa-times"></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">Active</span></td></tr>';
        a.appendRow(c)
    })
});
