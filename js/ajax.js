$(document).ready(function () {
    var xml;
    $.ajax({
        type: "GET",
        url: "./api/xml/provinsi.xml",
        dataType: "xml",
        success: function (xml) {


            $(xml).find('row').each(function () {
                var id_prov = $(this).find('id_provinsi').text();
                var provinsi = $(this).find('provinsi').text();
                var appender = "<option value='" + id_prov + "'>" + provinsi + "</option>";
                $("#select-provinsi").append(appender);
            });

        },
        error: function () {}
    });
});

function getKabupatenbaru(id_provs) {
    $("#select-kabupaten").empty();
    var xmlnew;
    $.ajax({
        type: "GET",
        url: "./api/xml/kabupaten.xml",
        dataType: "xml",
        success: function (xmlnew) {

            $(xmlnew).find('row').each(function () {
                var idp = $(this).find('id_provinsi').text();
                if (idp == id_provs) {
                    var id_kabupaten = $(this).find("id_kabupaten").text();
                    var kabupaten = $(this).find("kabupaten").text();
                    var appender = "<option value='" + id_kabupaten + "'>" + kabupaten + "</option>";

                    $("#select-kabupaten").append(appender);

                }
            });

        },
        error: function () {}

    });

}

function getKecamatan(id_kabs) {
    $("#select-kecamatan").empty();
    $.ajaxSetup({
        contentType: "application/json; charset=utf-8",
        beforeSend: function (xhr) {
            if (xhr.overrideMimeType) {
                xhr.overrideMimeType("application/json");
            }
        },
        dataType: 'json',
        mimeType: 'application/json'
    });

    $.getJSON("./api/json/kecamatan.json", function (obj) {
        var total = obj.length;
        for (var i = 0; i < total - 1; i++) {
            if (obj[i].id_kabupaten == id_kabs) {
                //jika sama
                var id_kecamatan = obj[i].id_kecamatan;
                var kecamatan = obj[i].kecamatan;
                var appender = "<option value='" + id_kecamatan + "'>" + kecamatan + "</option>";

                $("#select-kecamatan").append(appender);

            }
        }
    });
}

function getDesa(id_kecs) {
    $("#select-desa").empty();
    $.ajaxSetup({
        contentType: "application/json; charset=utf-8",
        beforeSend: function (xhr) {
            if (xhr.overrideMimeType) {
                xhr.overrideMimeType("application/json");
            }
        },
        dataType: 'json',
        mimeType: 'application/json'
    });

    $.getJSON("./api/json/desa.json", function (obj) {
        var total = obj.length;
        for (var i = 0; i < total - 1; i++) {
            if (obj[i].id_kecamatan == id_kecs) {
                var id_desa = obj[i].id_desa;
                var desa = obj[i].desa;
                var appender = "<option value='" + id_desa + "'>" + desa + "</option>";

                $("#select-desa").append(appender);

            }
        }
    });
}
