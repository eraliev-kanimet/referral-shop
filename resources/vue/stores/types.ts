
type TestimonialsItem = {
    id: number,
    name: string,
    address: string,
    avatar?: string,
    initial: string,
    content: string
}

type FaqItem = {
    id: number,
    question: string,
    answer: string,
}

export type SiteRootState = {
    testimonials: TestimonialsItem[],
    faq: FaqItem[],
}

export type ArticlesItem = {
    id: number,
    route: string,
    name: string,
    image: string,
    date: string,
}

export type ArticlesRootState = {
    articles: ArticlesItem[]
}
