// Array berisi element dari children Form
const listChildren = $("#form-container").children()

// Panjang grup
let lengthGroup = listChildren.length

// Index grup
let currentGroup = 0

// console.log($("input#f_tanggal_lahir"));

// $("input#f_tanggal_lahir").mask("##-##-####", { 'placeholder': "tanggal-bulan-tahun" }).attr({
//     maxLength: 10,
// })


// Reset group
const resetGroup = () => {
    $.each(listChildren, (_, elm) => {
        if (!$(elm).hasClass("d-none")) {
            $(elm).addClass("d-none")
        }
    });
}


/**
 * --------------------------------------------------
 * |                                                |
 * |                Start Validation                |
 * |                                                |
 * |------------------------------------------------|
*/

/**
 * is that invalid date ?
 * 
 * @param {} dateStr 
 * @returns 
 */
function isDateValid(dateStr) {
    const date = dateStr.split("-")
    const newDate = `${date[2]}/${date[1]}/${date[0]}`
    return !isNaN(new Date(newDate));
}
/**
 * 
 * @param {*} val 
 * @param {*} elmError 
 * @param {*} msg 
 * @param {*} isUseMessage 
 * @returns 
 */
const requiredValidation = (val, elmError, msg = null) => {

    if (val.trim() === '') {
        msg !== null ? $(elmError).text(msg) : ""
        return false
    }
    msg !== null ? $(elmError).text("") : ""
    return true
}

const minMaxValidation = (min, max, val, elmError = null, callbackMsg = null) => {
    if ((min < val.trim().length) && (val.trim().length < max)) {
        const msg = callbackMsg !== null ? callbackMsg(min, max) : `Mohon diisi ${min < 0 ? "dengan minimal karakter dan" : ""} maksimal ${max} karakter`;
        callbackMsg !== null ? elmError.text(msg) : ""
        return false;
    }
    return true
}

const phoneNumberValidation = (val, elmError = null, msg = null, isUseMessage = true) => {
    // Ganti pola regex untuk hanya mencocokkan angka saja
    const patternOfNumberPhone = /^\d{10,15}$/; // Hanya angka dengan panjang antara 10 sampai 15 digit
    if (!(patternOfNumberPhone.test(val.trim()))) {
        isUseMessage ? elmError.text(msg) : "";
        return false;
    }
    return true;
}


const emailValidation = (val, elmError = null, msg = null) => {
    const emailValidation = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
    if (!(emailValidation.test(val.trim()))) {
        msg !== null ? elmError.text(msg) : ""
        return false
    }
    return true
}

const NIPValidation = (val, elmError = null, msg = null) => {
    // Ganti pola regex untuk hanya angka
    const NIPValidation = /^\d{18}$/; // Hanya angka dengan panjang tepat 18 digit
    if (!(NIPValidation.test(val.trim()))) {
        msg !== null ? elmError.text(msg) : "";
        return false;
    }
    return true;
}



const DateValidation = (val, elmError = null, msg = null) => {
    if (!(isDateValid(val.trim()))) {
        msg !== null ? elmError.text(msg) : ""
        return false
    }
    return true
}

/**
 * |------------------------------------------------|
 * |                                                |
 * |                End Validation                  |
 * |                                                |
 * |------------------------------------------------|
 */

const validationGroup = (index) => {
    console.log('test', index)
    switch (index) {
        case 0:
            const username = requiredValidation($("input#username").val(), $("span#username-message"), "Nama lengkap mohon diisi !")
            const email = requiredValidation($("input#email").val(), $("span#email-message"), "Email mohon diisi !") && emailValidation($("input#email").val(), $("span#email-message"), "Email tidak valid !")
            const NIP = requiredValidation($("input#NIP").val(), $("span#NIP-message"), "NIP mohon diisi !") && NIPValidation($("input#NIP").val(), $("span#NIP-message"), "NIP tidak valid !")
            const tanggalLahir = requiredValidation($("input#f_tanggal_lahir").val(), $("span#f_tanggal_lahir-message"), "Tanggal Lahir mohon diisi !") 
            // && DateValidation($("input#f_tanggal_lahir").val(), $("span#f_tanggal_lahir-message"), "Tanggal Lahir tidak valid !")
            const agama = requiredValidation($("select#f_agama").val(), $("span#f_agama-message"), "Agama mohon diisi !")
            const noWa = requiredValidation($("input#f_no_wa").val(), $("span#f_no_wa-message"), "No Wa mohon diisi !") && phoneNumberValidation($("input#f_no_wa").val(), $("span#f_no_wa-message"), "No Wa tidak valid !")
            
            if (!username || !email || !NIP || !tanggalLahir || !agama || !noWa)
                return false
            break;
        case 1:
            const jabatan = requiredValidation($("select#jabatan").val() || "", $("span#jabatan_message"), "Jabatan mohon diisi!")
            const instansi = requiredValidation($("select#instansi").val() || "", $("span#instansi_message"), "Instansi mohon diisi!")
            const golongan = requiredValidation($("select#golongan").val() || "", $("span#golongan_message"), "Golongan mohon diisi!")
            const f_unit_kerja = requiredValidation($("input#f_unit_kerja").val() || "", $("span#f_unit_kerja_message"), "Unit Kerja mohon diisi!")
            const keahlian = requiredValidation($("select#keahlian").val() || "", $("span#keahlian_message"), "Keahlian mohon diisi!")
            
            if (!jabatan || !instansi || !golongan || !f_unit_kerja || !keahlian)
                return false
            break;

        case 2:
            const f_pendidikan_terakhir = requiredValidation($("select#f_pendidikan_terakhir").val() || "", $("span#f_pendidikan_terakhir_message"), "Pendidikan terakhir mohon diisi!")
            const f_universitas = requiredValidation($("select#f_universitas").val() || "", $("span#f_universitas_message"), "Universitas mohon diisi!")

            if (!f_pendidikan_terakhir || !f_universitas)
                return false
            break;

        case 3:
            const provinsi = requiredValidation($("select#provinsi").val() || "", $("span#provinsi_message"), "Provinsi mohon diisi!")
            const kabupaten = requiredValidation($("select#kabupaten").val() || "", $("span#kabupaten_message"), "Kabupaten mohon diisi!")
            const kecamatan = requiredValidation($("select#kecamatan").val() || "", $("span#kecamatan_message"), "Kecamatan mohon diisi!")
            const kelurahan = requiredValidation($("select#kelurahan").val() || "", $("span#kelurahan_message"), "Kelurahan mohon diisi!")
            const f_alamat = requiredValidation($("input#f_alamat").val() || "", $("span#f_alamat_message"), "Alamat mohon diisi!")

            if (!provinsi || !kabupaten || !kecamatan || !kelurahan || !f_alamat)
                return false
            break;

        case 4:
            const f_bukti_pembayaran = requiredValidation($("input#f_bukti_pembayaran").val() || "", $("span#f_bukti_pembayaran_message"), "Bukti Pembayaran mohon diisi!")
            if (!f_bukti_pembayaran)
                return false
            break;
        }

    return true
}

// Menampilkan Group Form
const moveGroup = () => {
    $.each(listChildren, (i, elm) => {
        if (i === currentGroup) {
            resetGroup()
            $(elm).removeClass(" d-none")
        }
    });
    changeNavigator()

    changeNavigatorCounter()
}

// Mengubah nama navigator form sudah mentok
const changeNavigator = () => {
    if (currentGroup >= lengthGroup - 1) {
        $("#next").text("Daftar Sekarang")
    } else {
        $("#next").text("Berikutnya")
    }

    if (currentGroup === 0) {

        $("#back").addClass("disabled")
    } else {
        $("#back").removeClass("disabled")
    }
}

// Mengubah index navigator
const changeNavigatorCounter = () => {
    if (currentGroup < lengthGroup) {
        $("#navigator-count").text(`Formulir pendafataran anggota bagian ${currentGroup + 1} dari ${lengthGroup}`)
    }
}


// Menambah index navigator
const addCurrentGroup = () => {
    // Submit jika index lebih dari panjang group
    const isValidation = validationGroup(currentGroup);
    (currentGroup < lengthGroup) && isValidation ? currentGroup++ : ""

    if (currentGroup === lengthGroup) {
        return $("#register-form").submit()
    }

    moveGroup()


}

// Mengurangi index navigator
const removeCurrentGroup = () => {
    currentGroup > 0 ? currentGroup-- : ""
    moveGroup()
}

$("#next").on("click", addCurrentGroup);
$("#back").on("click", removeCurrentGroup);

moveGroup()