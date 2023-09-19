<x-app-layout>
    <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
    <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
        <section 
            aria-labelledby="sumary-heading"
            class="bg-tertiary-800 py-12 text-indigo-300 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparente lg:px-0 lg:pb-24 lg:pt-0"
        >
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                <dl>
                    <dt class="texl-lg font-medium text-primary-200"> Resumo</dt>
                </dl>

                <x-checkout.product-list>
                    <x-checkout.product-item
                        name="High"
                        price="215,00"
                        :features="[
                            '30% off',
                            'Free shipping on orders over $ 200',
                        ]"
                        image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg" 
                    />
                </x-checkout.product-list>

                <dl class="space-y-6 border-white border-opacity-10 pt-6 text-sm font-medium">

                    <x-checkout.sumary-item title="Subtotal" value="530,00"/>
                    <x-checkout.sumary-item title="Frete" value="50,00"/>
                    <x-checkout.sumary-item title="Total" value="790,00" :is-last="true"/>



                </dl>

            </div>

        </section>
    </div>
</x-app-layout> 