
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

export type Product = {
    id: number,
    name: Translate,
    slug: string,
    images: string[],
    price: number,
    category: Category
}

export interface ProductShow extends Product {
    short_desc: Translate,
    desc: Translate,
    seo: {
        title: Translate,
        desc: Translate,
    },
    active_ingredients: string[],
    extra_other_names: string[],
    packs: {
        dose: number,
        items: {
            id: number,
            type: string,
            dose: number,
            price: number,
            quantity: number,
            measure: string,
            bestseller: boolean,
        }[]
    }[]
}

export type Article = {
    id: number,
    name: Translate,
    slug: string,
    image: string,
    date: string,
}
