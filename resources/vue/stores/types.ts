
export type Translate = {
    en: string,
    de: string,
    fr: string,
    es: string,
    it: string,
}

export type TestimonialsItem = {
    id: number,
    name: string,
    address: string,
    avatar?: string|null,
    initial: string,
    content: string
}

export type FaqItem = {
    id: number,
    question: string,
    answer: string,
}

export type Category = {
    id: number,
    name: Translate,
    slug: string,
    image: string,
    products: number
}

export type Article = {
    id: number,
    name: Translate,
    slug: string,
    image: string,
    date: string,
}
