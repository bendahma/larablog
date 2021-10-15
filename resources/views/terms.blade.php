@extends('layouts.frontendTemplate')

@section('header')
    <x-frontend.Hero />
@endsection

@section('content')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col px-3">
        <h1 class="text-3xl font-bold text-gray-900 my-3 ">Terms and Conditions</h1>
        <h3 class="text-xl font-bold text-gray-800 mt-3 "> 1. Terms </h3> 
        <p class="text-md text-gray-700 my-2 text-justify"> By accessing this Website, accessible from larablog.com, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

        <h3 class="text-xl font-bold text-gray-800 mt-3 "> 2. Use License </h3>
        <p class="text-md text-gray-700 my-2 text-justify">
                Permission is granted to temporarily download one copy of the materials on Larablog's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                modify or copy the materials;
                use the materials for any commercial purpose or for any public display;
                attempt to reverse engineer any software contained on Larablog's Website;
                remove any copyright or other proprietary notations from the materials; or
                transferring the materials to another person or "mirror" the materials on any other server.
                This will let Larablog to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the Terms Of Service Generator.
        </p>
        <h3 class="text-xl font-bold text-gray-800 mt-3 ">3. Disclaimer</h3>
        <p class="text-md text-gray-700 my-2 text-justify">
            All the materials on Larablog’s Website are provided "as is". Larablog makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, Larablog does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.
        </p>
        <h3 class="text-xl font-bold text-gray-800 mt-3 ">4. Limitations</h3>
        <p class="text-md text-gray-700 my-2 text-justify">
            Larablog or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on Larablog’s Website, even if Larablog or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.

        <h3 class="text-xl font-bold text-gray-800 mt-3 ">5. Revisions and Errata</h3>
        <p class="text-md text-gray-700 my-2 text-justify">
            The materials appearing on Larablog’s Website may include technical, typographical, or photographic errors. Larablog will not promise that any of the materials in this Website are accurate, complete, or current. Larablog may change the materials contained on its Website at any time without notice. Larablog does not make any commitment to update the materials.
        </p>
        <h3 class="text-xl font-bold text-gray-800 mt-3 ">6. Links</h3>
        <p class="text-md text-gray-700 my-2 text-justify">
            Larablog has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by Larablog of the site. The use of any linked website is at the user’s own risk.
        </p>
        <h3 class="text-xl font-bold text-gray-800 mt-3 ">7. Site Terms of Use Modifications</h3>
        <p class="text-md text-gray-700 my-2 text-justify">
            Larablog may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.
        </p>

    </section>

    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full flex justify-center  bg-white ">
            
            <div class="w-full flex justify-center flex-col ">
                    <img class="hover:opacity-75 cursor-pointer my-16 rounded-md shadow-sm" src="{{asset('/img/1.jpg')}}">   
                    <img class="hover:opacity-75 cursor-pointer my-16 rounded-md shadow-sm" src="{{asset('/img/2.jpg')}}">   
                    <img class="hover:opacity-75 cursor-pointer my-16 rounded-md shadow-sm" src="{{asset('/img/3.jpg')}}">                  
            </div>
           
        </div>

     </aside>
</div>

@endsection