<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('services')->delete();

        \DB::table('services')->insert(array(
            0 =>
            array(
                'menu_id' => 2,
                'id' => 2,
                'title_en' => 'Marketing Plan',
                'title_ar' => 'الخطة التسويقية',
                'description_en' => '<p>The majority of traditional marketers create their yearly marketing campaigns by advertising on social media networks, television, and other outlets. They then design a number of print media packages and assign a budget. At the end of every year, the process is repeated where they may add an extra 10% to their new budgets in an attempt to increase the volume of their campaigns. However, the end result is always the same</p>
<h1>Take advantage of your marketing opportunities</h1>
<p>We recognize and study marketing opportunities that are available to your organization so you can effectively introduce products and services to the market. The goal from this study is to develop your organization&rsquo;s products after their initial launch. When the volume of your current product sales have plateaued, we then switch our focus on your organization&rsquo;s growth.</p>
<h1>Know your marketing challenges</h1>
<p>After carefully studying your organization&rsquo;s workflow process, our team specifies your marketing challenges. We diligently gather and analyze information which, in turn, highlights the areas which need improvement. After we highlight said problems, our team presents a report that contains appropriate solutions while limiting the chances of shortfalls occurring in the future.</p>',
                'description_ar' => '<p>يقدم فريق تساويق خطة تسويقية مدتها سنة واحدة تركز على رفع مبيعات / حل مشكلات / إطلاق منتج جديد للمؤسسة بعد تقييم الوضع للمؤسسة من عدة جوانب تسويقية، ويتم إعداد خطة عمل مدروسة تشمل الأهداف التسويقية والبيعية واختيار الأدوات المناسبة للخطة لتحقيق أهدافها وتحديد الميزانية التقديرية لتنفيذ الخطة.</p>
<p>&nbsp;</p>
<h1>حدّدْ فرصك التسويقية</h1>
<p>&nbsp;</p>
<p>يتم تحديد ودراسة الفرص التسويقية المتاحة للعميل لتقديمها إلى السوق بشكل منتجات وخدمات بجانب الحالية منها، الهدف من هذه الدراسة هو تطوير مبيعات المؤسسة بعد مرحلة الاستقرار والتي يصبح حجم مبيعات المنتجات الحالية مستقرة ووصلت إلى أعلى مراحل التشبع والانتقال إلى مرحلة نمو المؤسسة.</p>
<p>&nbsp;</p>
<h1>تعرّف على مشكلاتك التسويقية</h1>
<p>&nbsp;</p>
<p>يقوم الفريق بتحديد مشكلات التسويق لدى المؤسسة بعد دراسة آلية العمل والتشغيل لنشاطها وجمع المعلومات وتحليلها لمعرفة مناطق الخلل، وبعد تحديد المشكلات يقدم الفريق تقريراً للحلول المناسبة لها لهدف الحد من تكرار وفرص حدوثها في المستقبل.</p>
<p>&nbsp;</p>',
                'image' => 'b8c398e3345d59e40191dd5d0f06c0a9.jpg',
                'created_at' => '2018-06-08 18:41:45',
                'updated_at' => '2018-06-09 09:38:06',
            ),
            1 =>
            array(
                'menu_id' => 2,
                'id' => 3,
                'title_en' => 'Marketing Strategy',
                'title_ar' => 'استراتيجية التسويق',
                'description_en' => '<p>Our team will prepare a strategy hand in hand with your organization to specify an end goal. It is a comprehensive three-year strategic plan which focuses on highlighting your organization&rsquo;s performance through a number of marketing aspects including: development, product offerings and services, pricing, quality control, and marketing identity. These marketing aspects play a vital role in realizing market share growth, brand positioning and consumer loyalty to your organization.</p>',
                'description_ar' => '<p>يقوم الفريق بإعداد الاستراتيجية بالتعاون مع العميل لتحديد نقطة الوصول، وهي استراتيجية شاملة لمدة ثلاثة سنوات ، تركز الاستراتيجية على تمييز مؤسسة العميل في إحدى الجوانب التسويقية كتطوير أو تقديم المنتجات / خدمة العملاء / التسعير والجودة والهوية التسويقية والتي تساهم في تحقيق النمو في الحصة التسويقية وتحقيق ولاء المستهلكين للمؤسسة ومكانة العلامة التجارية.</p>',
                'image' => 'ef5599d77411e62e2f96b00dba716339.jpg',
                'created_at' => '2018-06-08 18:43:40',
                'updated_at' => '2018-06-09 09:36:27',
            ),
            2 =>
            array(
                'menu_id' => 2,
                'id' => 4,
                'title_en' => 'Marketing Research',
                'title_ar' => 'البحث التسويقي',
                'description_en' => '<p>Who consumes your products and/or services? Your targeted client base buys your product or uses your services; therefore their purchases offer valuable marketing insight by identifying important factors, such as: age group, sex, place of residence, and interests. All of this information helps in delivering your product or services in an effective manner by allocating resources, such as time and money, to the appropriate marketing tools.</p>
<p>Our marketing team helps your organization in identifying the appropriate target audience for your products and services. All of this is presented in a detailed report along with our recommendations for the best manner to reach said audience.</p>',
                'description_ar' => '<p>يُعد البحث التسويقي العتبة الأولى في التسويق، يقوم فريق تساويق بالتعاون مع المؤسسة على تجميع معلومات تفصيلية حول نشاط المؤسسة ومنتجاتها ومعلومات تفصيلية أخرى عن السوق تشمل المنافسين ورغبات المستهلكين ، يتم تحليل جميع المعلومات وتقديم تقرير يشمل التوصيات، وتساهم هذه الخدمة في اتخاذ قرار المؤسسة في حال دخول سوق جديد أو إطلاق منتج / خدمة / مشروع جديد.</p>',
                'image' => '4436cf9f1d9c56f8e69755332d17fab9.jpg',
                'created_at' => '2018-06-08 18:53:04',
                'updated_at' => '2018-06-08 18:53:04',
            ),
            3 =>
            array(
                'menu_id' => 2,
                'id' => 5,
                'title_en' => 'Marketing Consultation',
                'title_ar' => 'الخدمات / العقود الاستشارية',
                'description_en' => '<p>A study is needed to identify the appropriate price for the products and services your organization offers. This study will take into account the current market value for said products and services as well as the perceived value your client receives. All of this is done through a systematic process by studying the cost of producing your product, highlighting its current market value, and identifying appropriate profit margins for each item or service. Additionally, we take into account your future competition. For established clients, we study current prices and evaluate them according to their market value and cost.</p>',
                'description_ar' => '<p>يقوم فريق تساويق بالإشراف على نشاط المؤسسة التسويقي من خلال تقديم الاستشارات والتوجيهات التي تساهم في تطوير الأداء العام للمؤسسة وتقديم الحلول والأفكار التسويقية حسب مايناسب إمكانيات ووضع المؤسسة ومن خلالها تحقق استحواذ أفضل على السوق بأقل التكاليف.</p>',
                'image' => '2768c36ba56820f026acf3ada2ec4f91.jpg',
                'created_at' => '2018-06-08 18:54:34',
                'updated_at' => '2018-06-08 18:54:34',
            ),
            4 =>
            array(
                'menu_id' => 2,
                'id' => 6,
                'title_en' => 'Training and Development',
                'title_ar' => 'التدريب والتطوير',
                'description_en' => '<p>The development of marketing programs for the employees of the marketing department of the organization includes training and direct guidance for the daily work. The programs are specially designed for the activity of the organization, including workshops / exercises and brainstorming sessions aimed at developing the performance of the marketing staff and qualifying them to a better level.</p>',
                'description_ar' => '<p>تقدم تساويق برامج تطويرية للعاملين في إدارة التسويق للمؤسسة تشمل التدريب والتوجيه المباشر للأعمال اليومية ، تتميز البرامج بأنها مُعِّدة بشكل خاص لنشاط المؤسسة تحتوي على ورش عمل / تمارين وجلسات العصف الذهني تهدف إلى تطوير أداء العاملين في مجال التسويق وتأهيلهم إلى مستوى أفضل.</p>',
                'image' => 'ef555ade54c7fd70f6dac331c9606207.jpg',
                'created_at' => '2018-06-08 18:56:42',
                'updated_at' => '2018-06-08 18:56:42',
            ),
            5 =>
            array(
                'menu_id' => 2,
                'id' => 7,
                'title_en' => 'Branding',
                'title_ar' => 'العلامات التجارية',
                'description_en' => '<p>Our expert team works to develop and establish a visual marketing identity that is appropriate to your organization. We do so after we diligently gather and analyze the inner workings of your organization. We proudly offer the following innovative services:</p>
<ul>
<li>Register your organization&rsquo;s name</li>
<li>Design your organization&rsquo;s logo and brand visuals</li>
<li>Create content for your organization&rsquo;s marketing identity</li>
<li>Issue press releases about your organization</li>
<li>Define your marketing communication</li>
<li>Photography and video services</li>
<li>Advertisement and print media design</li>
<li>Website design</li>
</ul>',
                'description_ar' => '<p>يعمل فريق تساويق على بناء الهوية التسويقية المرئية المناسبة للمؤسسة وذلك بعد عملية جمع معلومات عن فكرة النشاط وتقديم أفكار من خلال عدة جوانب منها:</p>
<ul>
<li>تأسيس الاسم التجاري</li>
<li>تصميم فكرة رمز العلامة التجارية</li>
<li>خلق محتوى الهوية التسويقية</li>
<li>الخطاب الإعلاني والاعلامي</li>
<li>الاتصال التسويقي</li>
<li>التصوير الفوتوغرافي والڤيديو</li>
<li>تصميم الإعلانات والمطبوعات</li>
<li>تصميم الموقع الإلكتروني</li>
</ul>',
                'image' => '719cb0afe9e4032cc69518db74fbaec0.jpg',
                'created_at' => '2018-06-08 18:58:14',
                'updated_at' => '2018-06-08 18:58:14',
            ),
            6 =>
            array(
                'menu_id' => 2,
                'id' => 8,
                'title_en' => 'Digital Marketing',
                'title_ar' => 'إدارة الحملات التسويقية والتسويق الإلكتروني',
                'description_en' => '<p>Our innovative process includes five main steps to ensure that your organization receives the best results:</p>
<ul>
<li>Step One: We gain insight into your organization&rsquo;s practices or conceptualize your organization&rsquo;s new project. We do this because we realize that no two organizations or projects are the same.</li>
<li>Step Two:We gather vital information about your organization&rsquo;s activities with the goal of assessing the current situation and uncovering any possible shortcomings. We then analyze both strong and weak points. Likewise, we assess the organization&rsquo;s need for further development and transition to the next level.</li>
<li>Step Three:We specify the direction of workflow based on the information we gathered and analyzed. This may include fixing a shortcoming, solving a problem, launching a new project or idea, or expanding and realizing project growth. Every strategic recommendation is project specific.</li>
<li>Step Four: We present your organization with a project report. This may include a work report or strategic work plan prepared by our expert team. We then offer our services to oversee that it properly executed and goals are attained.</li>
<li>Step Five:We measure your key performance indicators with the goal of evaluating results and their effect on work activities.</li>
</ul>',
                'description_ar' => '<p>تقدم تساويق خدمة إدارة وتنظيم الحملات التسويقية ( الإعلانية &ndash; الإعلامية) ، وتنقسم إلى:</p>
<ul>
<li>الحملة الإلكترونية وتشمل ( شبكة جوجل &ndash; شبكات التواصل الاجتماعية &ndash; المواقع الإلكترونية)</li>
<li>الحملة التقليدية وتشمل ( المقابلات الصحفية &ndash; الإعلانات الخارجية والطرق السريعة &ndash; المطبوعات &ndash; المقابلات والإعلانات الإذاعية)</li>
</ul>
<p>يتم تنفيذ الحملة التسويقية على المراحل التالية حسب نطاق عمل فريق تساويق:</p>
<ul>
<li>المرحلة الأولى : دراسة أهداف الحملة والشريحة المستهدفة.</li>
<li>المرحلة الثانية : تحديد الأدوات المناسبة للوصول إلى الشريحة المستهدفة.</li>
<li>المرحلة الثالثة : إعداد الأفكار التسويقية والرسالة وتصميم الحملة.</li>
<li>المرحلة الرابعة : إعداد الميزانية التقديرية لتنفيذ الحملة والجدول الزمني للحملة ومعايير قياس نجاح الحملة</li>
<li>المرحلة الخامسة: تقديم التقرير النهائي عن نتائج الحملة ومعايير النجاح.</li>
</ul>',
                'image' => 'd73612e19d02318250f296225f9591e6.jpg',
                'created_at' => '2018-06-08 18:59:46',
                'updated_at' => '2018-06-08 18:59:46',
            ),
            7 =>
            array(
                'menu_id' => 2,
                'id' => 10,
                'title_en' => 'Execution',
                'title_ar' => 'تنفيذ',
                'description_en' => '<p>Execution</p>',
                'description_ar' => '<p>إعدام</p>',
                'image' => 'e7892a4105d6f7fdfbe452ce72b0bf9d.jpg',
                'created_at' => '2019-04-03 09:29:58',
                'updated_at' => '2019-04-03 09:29:58',
            ),
            8 =>
            array(
                'menu_id' => 2,
                'id' => 11,
                'title_en' => 'Marketing Campaign',
                'title_ar' => 'حملة تسويق',
                'description_en' => '<p>Marketing Campaign</p>',
                'description_ar' => '<pre id="tw-target-text" class="tw-data-text tw-ta tw-text-medium" dir="rtl" style="text-align: right; height: 36px;" data-placeholder="Translation" data-fulltext=""><span lang="ar" tabindex="0">حملة تسويق</span></pre>',
                'image' => '8759e4823acdd9d02e9d59c737aabf9c.jpg',
                'created_at' => '2019-04-03 09:31:13',
                'updated_at' => '2019-04-03 09:31:13',
            ),
        ));
    }
}
