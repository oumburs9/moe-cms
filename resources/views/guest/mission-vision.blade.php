<x-guest-layout>
    <x-page.banner title="Mission Vision and Values">
        <x-page.nav link="#" name="About Us" />
        <x-page.nav link="#" name="Mission Vision and Values" current />
    </x-page.banner>

    <div class="container mx-auto font-am">
        <div class=" grid grid-cols-8 md:grid-cols-12 my-10 gap-10 ">
            <div
                class=" col-span-8 px-4  prose max-w-4xl  prose-mblue prose-headings:text-mblue prose-p:text-gray-500 prose-img:rounded-xl w-full font-noto prose-strong:text-gray-700 prose-p:-mt-5">
                <div>
                    <h1>ራዕይ</h1>
                    <p>ለሀገራቸው ብልፅግና የሚተጉ በሁለንተናዊ ስብእናቸው ብቁ የሆኑ ዜጎችን በ2022 ፈርቶ ማየት</p>
                    <h2>ተልዕኮ</h2>
                    <p>ፍትሀዊ፤ አካታች እና ተደራሽ የሆነ ጥራቱና አግባብነቱ የተረጋገጠ በመልካም አስተዳደር ላይ የተገነባ የህይወት ዘመን ትምህርትና ስልጠና አካል የሆነ
                        በቴክኖሎጂ
                        የተደገፈ ትምህርት ከቅድመ አንደኛ እስከ ሁለተኛ ደረጃ ድረስ ለዜጎች ማቅረብ</p>
                    <h2> እሴቶች</h2>
                    <p>የትምህርት እና ስልጠና ስርዓቱ ቁልፍ እሴቶች ፡-</p>
                    <p>
                        <strong>መልካም አስተዳደር፤</strong> በተጠያቂነትና በጋራ ሀላፊነት፣ እና በሌሎች የጥራት እና ምርታማነት መመዘኛዎች ማሳካት። ፍትሀዊነት፤
                        ለትምህርት እና
                        ለስልጠና የሚውሉ
                        ሀብቶችን ፍትሀዊ በሆነ መልኩ ማዳረስ፣ እና
                    </p>
                    <p>
                        <strong>ልህቀት፤</strong>
                        ከፍተኛ ጥራት፣ በራስ መተማመን አስፈላጊ የሆኑ ክህሎቶችን ማግኘት፣ በግምገማ ፈተናዎች ላይ ከፍተኛ ውጤት ማግኘት ብቻ ሳይሆን ፣ የማሰብ፣ መረጃን
                        የመተርጎም እና ችግሮችን የመፍታት የአዕምሮ አቅሞችን ማዳበር።
                    </p>
                </div>
            </div>

            <div class="col-span-4 bg-mwhite rounded-lg w-full list-none py-5 px-6">
                <h2 class="font-black text-mblue text-3xl mb-4">About Us</h2>
                <x-navbar.menu-link name="Mission, Vision & Values" link="{{ route('mvav') }}"
                    active="{{ request()->routeIs('mvav') }}" />
                <x-navbar.menu-link name="Power and Duties" link="{{ route('power-duties') }}"
                    active="{{ request()->routeIs('power-duties') }}" />
                <x-navbar.menu-link name="Organizational Structure" link="{{ route('org-chart') }}"
                    active="{{ request()->routeIs('org-chart') }}" />
                <x-navbar.menu-link name="Who Is Who" link="{{ route('who-is-who') }}"
                    active="{{ request()->routeIs('who-is-who') }}" />
                <x-navbar.menu-link name="Partners & Stakeholders" link="{{ route('partners') }}"
                    active="{{ request()->routeIs('partners') }}" />

                <x-navbar.menu-link name="University" link="{{ route('universties') }}"
                    active="{{ request()->routeIs('universties') }}" />
                <x-navbar.menu-link name="Regional Bureau" link="{{ route('bureaus') }}"
                    active="{{ request()->routeIs('bureaus') }}" />
                <x-navbar.menu-link name="Agencies" link="{{ route('agencies') }}"
                    active="{{ request()->routeIs('agencies') }}" />
                <x-navbar.menu-link name="CTE" link="{{ route('ctes') }}" active="{{ request()->routeIs('ctes') }}" />
                <x-navbar.menu-link name="Fact Sheet" link="{{ route('fact-sheet') }}"
                    active="{{ request()->routeIs('fact-sheet') }}" />
                <x-navbar.menu-link name="History" link="{{ route('history') }}" />
            </div>
        </div>


</x-guest-layout>