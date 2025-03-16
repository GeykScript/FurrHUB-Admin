import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



//lucide icons
import { createIcons, CircleCheckBig ,Truck, ShieldCheck, CircleArrowRight,PawPrint,ShoppingBag, CircleChevronLeft,Plus,Minus,Trash2,House,ChevronDown,NotebookPen,PhilippinePeso,ShoppingBasket,Bone,CircleUser} from 'lucide';

createIcons({
    icons: { CircleCheckBig,Truck ,ShieldCheck, CircleArrowRight,PawPrint, ShoppingBag, CircleChevronLeft,Plus,Minus,Trash2, House,NotebookPen ,ChevronDown,PhilippinePeso, ShoppingBasket,Bone, CircleUser},
});



// Quantity input
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("#Quantity-inputs").forEach((container) => {
        const decrementButton = container.querySelector("[data-input-counter-decrement]");
        const incrementButton = container.querySelector("[data-input-counter-increment]");
        const quantityInput = container.querySelector("[data-input-counter]");

        decrementButton.addEventListener("click", function () {
            let value = parseInt(quantityInput.value, 10);
            if (value > 1) {
                quantityInput.value = value - 1;
            }
        });

        incrementButton.addEventListener("click", function () {
            let value = parseInt(quantityInput.value, 10);
            quantityInput.value = value + 1;
        });
    });
});


    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("#dropdownbtn").addEventListener("click", function () {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        });
    });