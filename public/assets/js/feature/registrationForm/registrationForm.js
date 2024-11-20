// Array berisi element dari children Form
const listChildren = $("#form-container").children()

// Panjang grup
let lengthGroup = listChildren.length

// Index grup
let currentGroup = 0

console.log($("input#f_tanggal_lahir"));

$("input#f_tanggal_lahir").mask("##-##-####", { 'placeholder': "tanggal-bulan-tahun" }).attr({
    maxLength: 10,
})


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
    const patternOfNumberPhone = /[62|0]8\d{2}[\s-]?\d{4}[\s-]?\d{4}/g
    if (!(patternOfNumberPhone.test(val.trim()))) {
        isUseMessage ? elmError.text(msg) : ""
        return false
    }
    return true
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
    const NIPValidation = /^[\d]{4}(0|1)([\d]){1}([0-3][\d])\s[\d]{4}(([0-3][0-9]))\s[1-2]{1}[\s][\d]{3}$/
    if (!(NIPValidation.test(val.trim()))) {
        msg !== null ? elmError.text(msg) : ""
        return false
    }
    return true
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
    switch (index) {
        case 0:
            const username = requiredValidation($("input#username").val(), $("span#username-message"), "Nama lengkap mohon diisi !")
            const email = requiredValidation($("input#email").val(), $("span#email-message"), "Email mohon diisi !") && emailValidation($("input#email").val(), $("span#email-message"), "Email tidak valid !")
            const NIP = requiredValidation($("input#NIP").val(), $("span#NIP-message"), "NIP mohon diisi !") && NIPValidation($("input#NIP").val(), $("span#NIP-message"), "NIP tidak valid !")
            const tanggalLahir = requiredValidation($("input#f_tanggal_lahir").val(), $("span#f_tanggal_lahir-message"), "Tanggal Lahir mohon diisi !") && DateValidation($("input#f_tanggal_lahir").val(), $("span#f_tanggal_lahir-message"), "Tanggal Lahir tidak valid !")
            const agama = requiredValidation($("select#f_agama").val(), $("span#f_agama-message"), "Agama mohon diisi !")
            const noWa = requiredValidation($("input#f_no_wa").val(), $("span#f_no_wa-message"), "No Wa mohon diisi !") && phoneNumberValidation($("input#f_no_wa").val(), $("span#f_no_wa-message"), "No Wa tidak valid !")

            if (!username || !email || !NIP || !tanggalLahir || !agama || !noWa)
                return false
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
        $("#next").text("Submit")
    } else {
        $("#next").text("Lanjut")
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
        $("#navigator-count").text(`${currentGroup + 1} / ${lengthGroup}`)
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