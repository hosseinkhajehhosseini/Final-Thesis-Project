var weight, height, measure, bmi, error ;

function calculate() {
    weight = document.getElementsByName("weight")[0].value;
    height = document.getElementsByName("height")[0].value;
    error = "لطفا قد و وزن خود را وارد کنید";
    height /= 100;
    height *= height;
    bmi = weight/height;
    bmi = bmi.toFixed(1);

    if (bmi <= 18.4) {
        measure = "مقدار BMI شما برابر است با : " + bmi + " و به این معنی است که " + "شما کاهش وزن دارید";
    } else if (bmi >= 18.5 && bmi <= 24.9) {
        measure = "مقدار BMI شما برابر است با : " + bmi + " و به این معنی است که " + "شما نرمال هستید";
    } else if (bmi >= 25 && bmi <= 29.9) {
        measure = "مقدار BMI شما برابر است با : " + bmi + " و به این معنی است که " + "شما اضافه وزن دارید";
    } else if (bmi >= 30) {
        measure = "مقدار BMI شما برابر است با : " + bmi + " و به این معنی است که " + "شما چاق هستید"
    }


    if (weight === 0 ) {
        document.getElementById("bmi-results").value = error;
    } else if (height === 0){
        document.getElementById("bmi-results").value = error;
    }
    else {
        document.getElementById("bmi-results").value = measure;
    }
    if (weight < 0 || height<0) {
        document.getElementById("bmi-results").value = "مقادیر منفی مجاز نیستند";
    }
}
