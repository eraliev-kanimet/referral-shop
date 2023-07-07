import {DirectiveBinding} from "vue";

export default function (el: HTMLElement, binding: DirectiveBinding) {
    const value = binding.value;

    if (value.length) {
        el.innerText = value
        el.style.display = 'block'
    } else {
        el.innerText = ''
        el.style.display = 'none'
    }
}
