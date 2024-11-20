$(`select`).select2()

$("select#f_universitas").select2({
    ajax: {
        url: "http://universities.hipolabs.com/search",
        dataType: 'json',
        delay: 250,
        data: (params) => {
            return {
                name: params.term
            }
        },
        processResults: function (data) {

            const result = data.map(elm => {
                return {
                    id: elm.name,
                    text: elm.name
                }
            })

            return {
                results: result
            }
        },
        cache: true,
        minimumInputLength: 1
    }
})

const ajaxAdministrasi = (category, processData) => {
    return {
        url: `${window.location.origin}/api/${category}/search`,
        dataType: 'json',
        delay: 500,
        data: (params) => {
            return {
                nama: params.term
            }
        },
        processResults: processData,
        cache: true,
        minimumInputLength: 2
    }
}

$("select#kelurahan").select2({
    ajax: ajaxAdministrasi("kelurahan", (data) => {

        const result = (data.data)
            .filter((val) => val.kecamatan_id == $("select#kecamatan").val())
            .map(elm => {
                return {
                    id: elm.id,
                    text: elm.kel_nama
                }
            })

        return {
            results: result
        }
    })
});

$("select#kecamatan").select2({
    ajax: ajaxAdministrasi("kecamatan", (data) => {
        const result = (data.data)
            .filter((val) => val.kabupaten_id == $("select#kabupaten").val())
            .map(elm => {
                return {
                    id: elm.id,
                    text: elm.kec_nama
                }
            })

        return {
            results: result
        }
    })
});

$("select#kabupaten").select2({
    ajax: ajaxAdministrasi("kabupaten", (data) => {

        const result = (data.data)
            .filter((val) => val.provinsi_id == $("select#provinsi").val())
            .map(elm => {
                return {
                    id: elm.id,
                    text: elm.kab_nama
                }
            })

        return {
            results: result
        }
    })
});

$("select#provinsi").select2({
    ajax: ajaxAdministrasi("provinsi", (data) => {
        const result = (data.data)
            .map(elm => {
                return {
                    id: elm.id,
                    text: elm.prov_nama
                }
            })

        return {
            results: result
        }
    })
});

$("select#provinsi").on("change", () => {
    $("select#kabupaten").attr("disabled", false).val("").trigger("change")
    $("select#kecamatan").attr("disabled", true).val("").trigger("change")
    $("select#kelurahan").attr("disabled", true).val("").trigger("change")
    $("select#kelurahan").val("")
})

$("select#kabupaten").on("change", () => {
    $("select#kecamatan").attr("disabled", false).val("").trigger("change")
    $("select#kelurahan").attr("disabled", true).val("").trigger("change")
})

$("select#kecamatan").on("change", () => {
    $("select#kelurahan").attr("disabled", false).val("").trigger("change")
})