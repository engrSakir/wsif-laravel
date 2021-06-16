<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $team = new Team();
        $team->name =   'Shameem Ahsan 🇺🇸';
        $team->slug =   Str::slug('Shameem Ahsan 🇺🇸', '-');
        $team->image    =   'images/team/1.jpg';
        $team->description  =   'General Partner, Pegasus Tech Ventures
Shameem Ahsan is a VC & PE Investor, Co-Author – Startup Kingdom, Startup ecosystem builder and Policy Expert. He has been helping founders create social impact by converging business, tech, and innovation to solve socio economic problems in emerging economies. He has played a pivotal role in the implementation of major policy changes related to the ICT sector in last one decade.



Shameem is a General Partner of Pegasus Tech Ventures, a US$ 1.6 billion fund. Located in Silicon Valley, USA, Pegasus Tech Ventures provides funding to innovative startups around the world. With more than a dozen multi-million-dollar funds under management, Pegasus Tech Ventures focuses its investment in IT, Health IT, Artificial Intelligence, IoT, Robotics, Big Data, Virtual Reality, Augmented Reality, FinTech and Next Generation Technologies.

Pegasus has invested in over 180 startups in the United States, Japan, and Southeast Asia which includes include SpaceX, Airbnb, DoorDash, Robinhood, 23andMe, SoFi, Bird, Vicarious, Genius, H2O.ai, Affectiva, Color.

He is Chairman of Venture Capital & Private Equity Association of Bangladesh (VCPEAB). He is founder and President of TiE Dhaka.';
        $team->designation  =   'Chairman, World Social Innovation Forum

General Partner, Pegasus Tech Ventures';
        $team->linkedin =   'https://www.linkedin.com/in/shameemahsan/';
        $team->twitter  =   '';
        $team->save();

        //2
        $team = new Team();
        $team->name =   'Jenni Risku 🇫🇮';
        $team->slug =   Str::slug('Jenni Risku 🇫🇮', '-');
        $team->image    =   'images/team/2.jpg';
        $team->description  =   'Founding Partner, IxSA. Founder, Women in Tech
Jenni is a business kickstarter and entrepreneur with 10+ years of hands-on business development experience across Europe and Asia. Currently she is focused to empower people and companies with technology, and to create opportunities that serve this ecosystem in Asia.

She has led go-to-market teams and business expansions (reporting to C-level or main shareholders) and focused on diversification of existing businesses via partnerships and/or equity investments.

She has worked in various industries from e-commerce/online start-ups, events, cross-border investments between China and Europe (PE, M&A) and China trade (FMCG exports from Europe to China).

Her passion is global business & start-ups. She has lived in five and supported fifteen countries so far, usually as the first person on the ground to get things started.

She believes leadership should mean to lead with a strong vision, context and a sense of impact in order to empower people and teams. She is an impact driven entrepreneur, who focuses on building profitable, “do-good” businesses.';
        $team->designation  =   'Board Member, World Social Innovation Forum

Founding Partner, IxSA

Founder, Women in Tech Asia';
        $team->linkedin =   'https://www.linkedin.com/in/jennirisku/';
        $team->twitter  =   '';
        $team->save();

        //3
        $team = new Team();
        $team->name =   'James Tan 🇸🇬';
        $team->slug =   Str::slug('James Tan 🇸🇬', '-');
        $team->image    =   'images/team/3.jpg';
        $team->description  =   'Chairman, Action Community for Entrepreneurship (The National Voice for Singapore Startup Ecosystem)
James Tan is Managing Partner at Quest Ventures, a top venture capital fund in Asia. Prior to this, James was co-founder and COO of 55tuan, a NASDAQ listed e-commerce group that grew to more than 200 cities and 5,000 employees across China.

As the first Singaporean and one of the rarefied few foreigners to found a public listed internet company in China, and for his investments in the next generation of entrepreneurs, James was recognized as an outstanding overseas Chinese by the Overseas Chinese Affairs Office of the State Council of China. For his outstanding global contributions, James received the Alumni Award from the University of South Australia.

James currently serves as advisor, board member or trustee on the Action Community for Entrepreneurship, Applied Innovation Institute, Business Angel Network of Southeast Asia, Beijing CYL Joint Committee on Entrepreneurship Development, National Research Foundation CGAP Fund, Social Impact Catalyst, Sports Excellence Business, and Vietnam Angel Network.

James has been guest speaker at China-focused and entrepreneurship events such as ITB Berlin, Private Equity Insights, Stanford-PARC Digital Cities, SWITCH, and World Islamic Economic Forum. He is an advisor or mentor at Chinaccelerator, Founder Institute, and PSA unboXed. He has guest lectured at Fudan, IE, Tsinghua, and UC Berkeley.';
        $team->designation  =   'Board Member, World Social Innovation Forum

Chairman, Action Community for Entrepreneurship

Managing Partner, Quest Ventures';
        $team->linkedin =   'https://www.linkedin.com/in/sgjames/';
        $team->twitter  =   '';
        $team->save();

        //4
        $team = new Team();
        $team->name =   'Mahmoud Adi 🇦🇪';
        $team->slug =   Str::slug('Mahmoud Adi 🇦🇪', '-');
        $team->image    =   'images/team/4.jpg';
        $team->description  =   'Founding Partner, Shorooq Partners
Mahmoud is Shorooq’s Co-Founding Partner, as well as a passionate believer in technology, and its ability to unlock potential in the Middle East and GCC. Mahmoud has over a decade of experience in tech ventures, having built his career as an investment professional, engineer and entrepreneur and having also co-founded Pure Harvest Smart Farms, a regional innovator in sustainable agriculture focused on the production of greenhouse fruits and vegetables in the challenging climates of the Arab Gulf region using world-leading Dutch greenhouse growing technologies.

Mahmoud holds an MBA from Stanford Graduate School of Business. He also graduated with a B.S. in Mechanical Engineering from the Petroleum Institute in Abu Dhabi with Honor and Distinction.';
        $team->designation  =   'Board Member, World Social Innovation Forum

Founding Partner, ShorooqPartners';
        $team->linkedin =   'https://www.linkedin.com/in/mahmoudadi/';
        $team->twitter  =   '';
        $team->save();

        //5
        $team = new Team();
        $team->name =   'Kurt Davis 🇺🇸';
        $team->slug =   Str::slug('Kurt Davis 🇺🇸', '-');
        $team->image    =   'images/team/5.jpg';
        $team->description  =   'Author, "Finding Soul: From Silicon Valley to Africa"
Kurt is a global entrepreneur and a business leader in technology from Silicon Valley and Asia for 20 years. He is the Chairman and Co-Founder of Kakuma Ventures and his expertise is the intersection of finance, business development/partnerships, and international work (Asia, Europe, and Africa), BD specialist, and financier. He was the first business hire at Boku.com and built that operation globally for 7 years. The company (Boku.com) went IPO in London in November 2017. He did over 100 deals with telecom and digital media companies including Apple, Microsoft, Facebook, Softbank, Alibaba, Vodafone, and more. He also has 6 years’ experience in venture capital investing.

World exploration and social impact is a passion of his. He has traveled to 80 countries. Most recently, he traveled Africa where he taught at business accelerators, and started a micro-finance non-profit in a refugee camp at Kakuma, Kenya.';
        $team->designation  =   'Board Member, World Social Innovation Forum

Author, “Finding Soul: From Silicon Valley to Africa”';
        $team->linkedin =   'https://www.linkedin.com/in/kurtdavis1/';
        $team->twitter  =   '';
        $team->save();
    }
}
