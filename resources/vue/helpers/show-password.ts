
export default function (e: Event) {
    const element = e.target as HTMLElement;
    const parent = element.parentElement as HTMLElement;
    const input = parent.children[0] as HTMLInputElement

    if (input.type === 'text') {
        input.type = 'password'
        element.classList.add("icon-eye-off")
        element.classList.remove("icon-eye")
    } else {
        input.type = 'text'
        element.classList.add("icon-eye")
        element.classList.remove("icon-eye-off")
    }
}
