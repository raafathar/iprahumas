// Array berisi element dari children Form
const listChildren = $("#form-container").children()

// Panjang grup
let lengthGroup = listChildren.length

// Index grup
let currentGroup = 0

// Reset group
const resetGroup = () => {
    $.each(listChildren, (i, elm) => {
        if (!$(elm).hasClass("d-none")) {
            $(elm).addClass("d-none")
        }
    });
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
        console.log($("#back"));

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
    currentGroup < lengthGroup ? currentGroup++ : ""

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