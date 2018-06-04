<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Repudianddae repellat voluptate';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta, turpis a porta congue, nulla erat ullamcorper sem, eu dictum risus nunc nec felis. Curabitur elementum porta sapien, sit amet elementum est. Curabitur et mi rutrum, interdum elit a, consectetur nisl. Nullam nisi sapien, interdum at est ultricies, elementum sollicitudin magna. Maecenas volutpat nisl sed sollicitudin tristique. Phasellus sapien lorem, egestas quis lectus non, hendrerit rhoncus dolor. Sed eget velit massa. Praesent consectetur, ex vel pellentesque facilisis, lectus arcu eleifend purus, nec posuere quam magna eget felis. Vivamus augue ipsum, fringilla et dolor et, gravida accumsan felis. Nunc at ligula ante. Vivamus bibendum libero eu arcu facilisis, vel vestibulum nisi imperdiet.<br><br>

            Sed ac turpis a dolor dignissim vehicula. Integer bibendum fringilla sagittis. In tempus tortor a commodo blandit. In ultrices risus sed turpis consequat, sit amet eleifend justo gravida. Donec in fringilla lacus, ut tristique felis. Phasellus gravida purus elit. Praesent consequat erat nulla, sed consectetur quam scelerisque eget. Vivamus auctor ornare mi ut pellentesque. Pellentesque rutrum tortor in semper scelerisque. Praesent quis odio ac eros ultricies pharetra. Sed et urna felis.<br><br>
            
            Pellentesque sed turpis ut tellus fermentum bibendum. Vivamus posuere lectus non interdum pharetra. Suspendisse vitae lobortis sapien. Nunc porttitor nisl nisi, quis interdum lorem tristique sed. Suspendisse venenatis lacus sed augue imperdiet, sed luctus eros viverra. Donec ac enim leo. Nulla in sollicitudin orci. Pellentesque a dui eget quam suscipit porttitor. Pellentesque scelerisque posuere sem at gravida. Donec in cursus massa, in ultricies magna.<br><br>
            
            Sed ac purus est. Mauris lacus ipsum, blandit in eros nec, egestas ultrices est. Mauris varius nisi a lorem volutpat, ut ultrices odio rutrum. Integer scelerisque mauris porta enim commodo vehicula. Vivamus tristique nisl vel aliquam semper. Nam lacinia quis urna ut fermentum. Curabitur vitae erat quis velit lacinia efficitur nec at eros. Nam fermentum sapien et massa venenatis, vitae congue elit laoreet. Nam et lacus a nulla facilisis gravida ac quis purus.<br><br>
            
            Morbi ultricies est at nulla commodo aliquam. Cras tincidunt dictum elit, vitae sodales nunc lobortis et. Donec urna lectus, congue nec urna in, imperdiet luctus felis. Sed in dignissim lacus. Praesent iaculis, ante quis consequat fringilla, nunc diam viverra felis, id ullamcorper nulla leo eu dui. Nunc sit amet malesuada erat. Quisque semper augue dui. Donec in nisi metus. Sed nec orci venenatis, efficitur mauris in, euismod risus. Fusce vestibulum risus nec lectus viverra ultrices. Donec consequat sed magna vitae ultricies. Aenean sagittis neque a leo ullamcorper blandit.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Aenean commodo ligula eget door.';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Maecenas maximus fermentum orci, vel maximus ante scelerisque vitae. Pellentesque eget purus nibh. Nullam blandit vitae nisi ut auctor.',
            'body' => 'Maecenas <strong>maximus</strong> fermentum orci, vel maximus ante scelerisque vitae. Pellentesque eget purus nibh. Nullam blandit vitae nisi ut auctor. Donec molestie diam eu est facilisis sagittis. In eu feugiat elit, eu mollis massa. Proin lobortis, nulla ut tristique iaculis, purus mauris viverra elit, a iaculis eros mauris et purus. Pellentesque auctor quis purus eget euismod. Vestibulum ultricies neque id dui gravida bibendum. Ut vitae mi lacus. Cras mi nulla, egestas ut dapibus a, imperdiet in tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>

            Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis hendrerit eget. Donec in urna ut nisl molestie convallis quis sed ex. Curabitur mattis molestie purus, vitae vulputate orci sagittis eleifend. Morbi accumsan sapien eget ipsum condimentum consectetur. Aliquam ac vulputate sem. Sed posuere magna ac rutrum molestie. Aenean imperdiet faucibus tortor, ac pellentesque magna blandit ut. Quisque eu euismod sapien. Phasellus efficitur dolor vel arcu tempor facilisis. Duis quis congue odio. Suspendisse potenti. Quisque accumsan leo elit, eu elementum tortor accumsan et. Nullam rhoncus non augue nec faucibus. Etiam elementum metus eget elit ultricies, non rutrum nibh aliquam. Nunc odio lectus, ullamcorper vitae sapien eget, aliquet pulvinar ante.<br><br>
            
            Aliquam mollis risus eu massa aliquet pulvinar. Fusce tempus libero vel cursus finibus. Morbi vestibulum metus convallis, efficitur urna id, rhoncus ex. Phasellus nec magna vel est ornare lobortis. Aenean vel purus et tellus porta elementum ac eget nibh. Ut vitae interdum justo, sit amet semper enim. Nam efficitur sapien mi, nec convallis augue semper a. Vestibulum ligula dui, imperdiet at nunc in, consectetur maximus turpis.<br><br>
            
            Praesent placerat erat nec leo volutpat ornare. In ut ultrices velit. Donec quis ligula sodales, aliquet orci id, commodo tellus. Aliquam hendrerit, neque at vehicula bibendum, mauris felis faucibus ex, vel posuere tellus nisl eu dolor. Mauris ultrices turpis vel ligula molestie, in fringilla velit ultricies. Sed pretium sem iaculis maximus sodales. Sed sed lectus vitae magna aliquam maximus. Sed tellus ex, sollicitudin quis aliquam eget, consequat in sapien. Nulla maximus tortor in ipsum aliquet pulvinar. Mauris sed dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut augue quis lacus molestie efficitur. Quisque mattis arcu risus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Aenean massa.';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'In eu feugiat elit, eu mollis massa. Proin lobortis, nulla ut tristique iaculis, purus mauris viverra elit, a iaculis eros mauris et purus. ',
            'body' => 'Donec ac purus mattis, maximus nibh id, scelerisque velit. Ut pulvinar fringilla ex, eu consequat sem mollis a. Nullam volutpat sit amet diam ut pretium. Integer at tempor metus, et malesuada ipsum. Etiam euismod, lorem nec fermentum suscipit, ante odio lobortis libero, ac ultricies lectus est at nisi. Aenean non efficitur felis, et facilisis augue. Nam eget arcu a ex egestas sodales. Vivamus in velit vitae arcu tincidunt eleifend ut at nulla. Curabitur congue nulla sit amet sagittis tincidunt. Curabitur nec dolor ac lectus malesuada venenatis. Proin sed ante sed eros dapibus euismod ullamcorper quis nibh. Donec euismod aliquet mauris nec vehicula. Vivamus fermentum velit tellus, vel maximus massa rhoncus sed.<br><br>

            Cras lacinia volutpat libero, imperdiet scelerisque nulla eleifend eget. Aliquam suscipit interdum diam, sed varius mauris tincidunt sit amet. Vivamus a purus leo. Phasellus malesuada cursus enim in ullamcorper. Integer sollicitudin hendrerit varius. Donec nunc augue, vehicula ac finibus in, efficitur vitae massa. Pellentesque molestie pretium justo, non scelerisque mauris egestas in. Pellentesque ipsum nunc, bibendum at accumsan eu, malesuada ac mi.<br><br>
            
            Maecenas in lorem sit amet nulla blandit finibus. Morbi rutrum ante eu ante viverra, vitae sollicitudin mauris rutrum. Curabitur hendrerit urna ac sapien bibendum, ac scelerisque ex rhoncus. Morbi ac viverra felis, ut aliquet nisi. In vulputate ex dui, in malesuada nulla aliquam id. Sed non sollicitudin mi, sit amet vulputate nulla. Donec mi odio, volutpat id egestas vel, convallis at sapien. Ut metus mi, consectetur quis libero id, convallis aliquam nibh. Donec odio turpis, rutrum eu condimentum quis, egestas nec nunc. Ut nulla nunc, efficitur sit amet pulvinar vitae, lacinia ut nulla.<br><br>
            
            Duis at dui dignissim, varius nulla eget, porta orci. Nam a luctus tortor, ac mollis ante. Donec quis lacinia nisl, sit amet cursus ante. Ut viverra mauris ut facilisis sagittis. Sed nec aliquam magna. Nullam hendrerit lorem sit amet urna lobortis, a malesuada lectus scelerisque. Nunc iaculis justo maximus, volutpat risus vitae, scelerisque neque. Donec commodo nec sapien eu consequat. Vivamus at ante vestibulum, molestie nisi ut, dictum nisi. Proin mattis lobortis mi, ut feugiat mi elementum quis. Phasellus cursus mauris ut feugiat tincidunt. Donec tristique egestas porta.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Vivamus auctor ornare mi ut pel';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Pellentesque auctor quis purus eget euismod. Vestibulum ultricies neque id dui gravida bibendum. Ut vitae mi lacus. Cras mi nulla, egestas ut dap',
            'body' => 'Ut ultricies diam a velit auctor, sit amet finibus magna scelerisque. Curabitur pharetra ut lacus a porta. Curabitur consequat tortor at posuere feugiat. Maecenas et molestie lectus. Morbi posuere eget turpis et interdum. Etiam orci lectus, suscipit imperdiet elit consectetur, tempor gravida est. Proin imperdiet tortor vitae semper pretium. Proin iaculis accumsan est a fermentum. Sed tincidunt est nec placerat suscipit.<br><br>

            Nullam at magna enim. Praesent gravida porta magna sed sodales. Morbi at sem velit. Nam ut sodales urna. Mauris orci erat, ultricies posuere felis vitae, venenatis lobortis leo. Nullam a risus tincidunt, dapibus enim eget, faucibus magna. Nulla convallis vestibulum lorem, laoreet pellentesque justo dignissim vitae. Ut tempor urna hendrerit nibh fermentum tristique. Phasellus vestibulum orci vel nunc hendrerit tincidunt. Suspendisse vitae justo fringilla, ultrices justo quis, varius metus. Nullam tempor ligula mi. Nunc non blandit sem. Maecenas vitae eleifend ex. Maecenas malesuada id diam in eleifend. Donec ultricies erat mauris, quis sagittis risus gravida et.<br><br>
            
            Cras sagittis orci vitae nulla imperdiet mattis nec in velit. Vestibulum ac purus magna. Nunc euismod pharetra eros in consectetur. Proin pharetra tincidunt justo vel suscipit. Ut non porta urna. Vestibulum ac ornare tellus. Cras volutpat varius erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sodales justo vel eros aliquet finibus. Nam sit amet ultricies massa. Nunc non tempus sem. Praesent volutpat finibus nisi, sit amet molestie arcu rhoncus eu. Duis facilisis ipsum maximus laoreet faucibus. Sed sollicitudin ex vitae nunc commodo aliquet. Nam ullamcorper nisl vel turpis dapibus eleifend. Etiam iaculis ullamcorper diam, in viverra lorem vestibulum ac.<br><br>
            
            Vivamus venenatis rhoncus pellentesque. Vestibulum fermentum ante posuere ex malesuada, sit amet dignissim nibh finibus. Quisque eget turpis quis risus convallis lobortis. Proin semper auctor quam, quis placerat ligula pulvinar a. Mauris ut magna mi. Duis ullamcorper, enim et finibus vestibulum, metus diam mollis elit, ut tempor nisl elit ac tellus. Nunc varius velit lacus, id vulputate ex faucibus sit amet. Pellentesque euismod placerat tristique. Vivamus malesuada, diam in congue luctus, leo est luctus urna, ut commodo arcu magna tempor mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam quis ullamcorper mi, eu faucibus turpis. Nam aliquet, felis sed sodales lobortis, purus augue fermentum sem, at venenatis sapien purus sed enim. Ut tincidunt ac eros nec gravida.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Mauris lacus ipsum, blandit in';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis he.',
            'body' => 'Phasellus sollicitudin nisl a sapien auctor bibendum. Ut interdum, elit at feugiat lacinia, lorem turpis consectetur magna, sit amet maximus tellus magna non lorem. Nam nec aliquet felis. Duis fermentum diam vel consequat mollis. Vestibulum at lacus commodo ante molestie fermentum. Sed id justo varius augue porta malesuada non ac ipsum. Aliquam justo est, faucibus a egestas at, porta nec enim. Fusce facilisis pharetra massa, sit amet varius libero consectetur ut. Integer cursus dui quis massa consectetur, id lobortis dolor imperdiet. Integer sed sapien non tortor finibus ultrices tincidunt nec dolor. Sed pellentesque porttitor magna sed scelerisque. Nunc tempor sapien sem, nec ornare tellus malesuada bibendum.<br><br>

            Cras sed augue eget orci ultricies dignissim quis vitae augue. Vivamus dapibus cursus est, nec aliquet sem luctus id. Praesent efficitur enim dolor, at molestie ex efficitur ac. Mauris fringilla nibh diam, id ultrices magna finibus quis. In consectetur sapien quis nulla dapibus viverra. Proin semper, lorem a consectetur aliquam, orci turpis consequat lorem, et tincidunt massa magna nec mi. Integer mollis eros at nunc vulputate tempor. Nunc gravida lorem nibh, nec pellentesque velit gravida ut. Sed hendrerit ante turpis, eu iaculis ligula vestibulum nec. Etiam at tellus a erat pulvinar maximus. Suspendisse ut leo maximus, vulputate nunc vitae, gravida nibh. Fusce vulputate fringilla finibus. Nulla eu dapibus ipsum. Nam ut mi gravida, sodales augue eget, iaculis nisi. Fusce quis ligula quam. Quisque efficitur laoreet ultrices.<br><br>
            
            Nunc rhoncus in enim id congue. Fusce tristique mi vitae magna volutpat, a convallis ante faucibus. Phasellus cursus malesuada nibh, eget tincidunt elit rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tincidunt dui urna, at iaculis elit accumsan sit amet. Nullam velit justo, aliquet nec orci vel, efficitur malesuada nisl. Proin rhoncus mi elit, et faucibus nisl malesuada nec. Quisque auctor orci non lorem porta egestas. Suspendisse id congue libero, vitae ultrices tellus. Donec nec facilisis elit, non fringilla dui. Vivamus maximus ipsum et turpis pharetra, ut tincidunt nisi consequat. Nullam semper nibh maximus arcu consectetur, sit amet tristique mauris tincidunt. Duis ullamcorper a nisl a maximus. Nullam non leo vitae urna aliquet rutrum.<br><br>
            
            Etiam mollis turpis eget neque finibus commodo. Integer orci ipsum, accumsan id luctus vel, molestie ac nisl. Nulla vel lobortis odio. Sed varius ante orci, in blandit nisl aliquet at. Donec vel dui tellus. Donec sodales ligula nibh, a semper turpis vehicula rhoncus. Sed viverra commodo interdum. Praesent ut dolor id nulla viverra sollicitudin ac facilisis nisi. Nulla lorem eros, rhoncus vel elementum id, maximus sed erat. Aliquam erat volutpat. Fusce lacinia dui sit amet libero hendrerit, ut scelerisque magna lacinia. Nam euismod semper mauris finibus interdum. Nam pretium a sapien a tincidunt. Suspendisse a consectetur tellus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Sed feugiat, dolor quis';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis he.',
            'body' => 'Phasellus sollicitudin nisl a sapien auctor bibendum. Ut interdum, elit at feugiat lacinia, lorem turpis consectetur magna, sit amet maximus tellus magna non lorem. Nam nec aliquet felis. Duis fermentum diam vel consequat mollis. Vestibulum at lacus commodo ante molestie fermentum. Sed id justo varius augue porta malesuada non ac ipsum. Aliquam justo est, faucibus a egestas at, porta nec enim. Fusce facilisis pharetra massa, sit amet varius libero consectetur ut. Integer cursus dui quis massa consectetur, id lobortis dolor imperdiet. Integer sed sapien non tortor finibus ultrices tincidunt nec dolor. Sed pellentesque porttitor magna sed scelerisque. Nunc tempor sapien sem, nec ornare tellus malesuada bibendum.<br><br>

            Cras sed augue eget orci ultricies dignissim quis vitae augue. Vivamus dapibus cursus est, nec aliquet sem luctus id. Praesent efficitur enim dolor, at molestie ex efficitur ac. Mauris fringilla nibh diam, id ultrices magna finibus quis. In consectetur sapien quis nulla dapibus viverra. Proin semper, lorem a consectetur aliquam, orci turpis consequat lorem, et tincidunt massa magna nec mi. Integer mollis eros at nunc vulputate tempor. Nunc gravida lorem nibh, nec pellentesque velit gravida ut. Sed hendrerit ante turpis, eu iaculis ligula vestibulum nec. Etiam at tellus a erat pulvinar maximus. Suspendisse ut leo maximus, vulputate nunc vitae, gravida nibh. Fusce vulputate fringilla finibus. Nulla eu dapibus ipsum. Nam ut mi gravida, sodales augue eget, iaculis nisi. Fusce quis ligula quam. Quisque efficitur laoreet ultrices.<br><br>
            
            Nunc rhoncus in enim id congue. Fusce tristique mi vitae magna volutpat, a convallis ante faucibus. Phasellus cursus malesuada nibh, eget tincidunt elit rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tincidunt dui urna, at iaculis elit accumsan sit amet. Nullam velit justo, aliquet nec orci vel, efficitur malesuada nisl. Proin rhoncus mi elit, et faucibus nisl malesuada nec. Quisque auctor orci non lorem porta egestas. Suspendisse id congue libero, vitae ultrices tellus. Donec nec facilisis elit, non fringilla dui. Vivamus maximus ipsum et turpis pharetra, ut tincidunt nisi consequat. Nullam semper nibh maximus arcu consectetur, sit amet tristique mauris tincidunt. Duis ullamcorper a nisl a maximus. Nullam non leo vitae urna aliquet rutrum.<br><br>
            
            Etiam mollis turpis eget neque finibus commodo. Integer orci ipsum, accumsan id luctus vel, molestie ac nisl. Nulla vel lobortis odio. Sed varius ante orci, in blandit nisl aliquet at. Donec vel dui tellus. Donec sodales ligula nibh, a semper turpis vehicula rhoncus. Sed viverra commodo interdum. Praesent ut dolor id nulla viverra sollicitudin ac facilisis nisi. Nulla lorem eros, rhoncus vel elementum id, maximus sed erat. Aliquam erat volutpat. Fusce lacinia dui sit amet libero hendrerit, ut scelerisque magna lacinia. Nam euismod semper mauris finibus interdum. Nam pretium a sapien a tincidunt. Suspendisse a consectetur tellus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Repudiandae repellat voluptate';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porta, turpis a porta congue, nulla erat ullamcorper sem, eu dictum risus nunc nec felis. Curabitur elementum porta sapien, sit amet elementum est. Curabitur et mi rutrum, interdum elit a, consectetur nisl. Nullam nisi sapien, interdum at est ultricies, elementum sollicitudin magna. Maecenas volutpat nisl sed sollicitudin tristique. Phasellus sapien lorem, egestas quis lectus non, hendrerit rhoncus dolor. Sed eget velit massa. Praesent consectetur, ex vel pellentesque facilisis, lectus arcu eleifend purus, nec posuere quam magna eget felis. Vivamus augue ipsum, fringilla et dolor et, gravida accumsan felis. Nunc at ligula ante. Vivamus bibendum libero eu arcu facilisis, vel vestibulum nisi imperdiet.<br><br>

            Sed ac turpis a dolor dignissim vehicula. Integer bibendum fringilla sagittis. In tempus tortor a commodo blandit. In ultrices risus sed turpis consequat, sit amet eleifend justo gravida. Donec in fringilla lacus, ut tristique felis. Phasellus gravida purus elit. Praesent consequat erat nulla, sed consectetur quam scelerisque eget. Vivamus auctor ornare mi ut pellentesque. Pellentesque rutrum tortor in semper scelerisque. Praesent quis odio ac eros ultricies pharetra. Sed et urna felis.<br><br>
            
            Pellentesque sed turpis ut tellus fermentum bibendum. Vivamus posuere lectus non interdum pharetra. Suspendisse vitae lobortis sapien. Nunc porttitor nisl nisi, quis interdum lorem tristique sed. Suspendisse venenatis lacus sed augue imperdiet, sed luctus eros viverra. Donec ac enim leo. Nulla in sollicitudin orci. Pellentesque a dui eget quam suscipit porttitor. Pellentesque scelerisque posuere sem at gravida. Donec in cursus massa, in ultricies magna.<br><br>
            
            Sed ac purus est. Mauris lacus ipsum, blandit in eros nec, egestas ultrices est. Mauris varius nisi a lorem volutpat, ut ultrices odio rutrum. Integer scelerisque mauris porta enim commodo vehicula. Vivamus tristique nisl vel aliquam semper. Nam lacinia quis urna ut fermentum. Curabitur vitae erat quis velit lacinia efficitur nec at eros. Nam fermentum sapien et massa venenatis, vitae congue elit laoreet. Nam et lacus a nulla facilisis gravida ac quis purus.<br><br>
            
            Morbi ultricies est at nulla commodo aliquam. Cras tincidunt dictum elit, vitae sodales nunc lobortis et. Donec urna lectus, congue nec urna in, imperdiet luctus felis. Sed in dignissim lacus. Praesent iaculis, ante quis consequat fringilla, nunc diam viverra felis, id ullamcorper nulla leo eu dui. Nunc sit amet malesuada erat. Quisque semper augue dui. Donec in nisi metus. Sed nec orci venenatis, efficitur mauris in, euismod risus. Fusce vestibulum risus nec lectus viverra ultrices. Donec consequat sed magna vitae ultricies. Aenean sagittis neque a leo ullamcorper blandit.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Aen commodo ligula eget door.';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Maecenas maximus fermentum orci, vel maximus ante scelerisque vitae. Pellentesque eget purus nibh. Nullam blandit vitae nisi ut auctor.',
            'body' => 'Maecenas <strong>maximus</strong> fermentum orci, vel maximus ante scelerisque vitae. Pellentesque eget purus nibh. Nullam blandit vitae nisi ut auctor. Donec molestie diam eu est facilisis sagittis. In eu feugiat elit, eu mollis massa. Proin lobortis, nulla ut tristique iaculis, purus mauris viverra elit, a iaculis eros mauris et purus. Pellentesque auctor quis purus eget euismod. Vestibulum ultricies neque id dui gravida bibendum. Ut vitae mi lacus. Cras mi nulla, egestas ut dapibus a, imperdiet in tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>

            Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis hendrerit eget. Donec in urna ut nisl molestie convallis quis sed ex. Curabitur mattis molestie purus, vitae vulputate orci sagittis eleifend. Morbi accumsan sapien eget ipsum condimentum consectetur. Aliquam ac vulputate sem. Sed posuere magna ac rutrum molestie. Aenean imperdiet faucibus tortor, ac pellentesque magna blandit ut. Quisque eu euismod sapien. Phasellus efficitur dolor vel arcu tempor facilisis. Duis quis congue odio. Suspendisse potenti. Quisque accumsan leo elit, eu elementum tortor accumsan et. Nullam rhoncus non augue nec faucibus. Etiam elementum metus eget elit ultricies, non rutrum nibh aliquam. Nunc odio lectus, ullamcorper vitae sapien eget, aliquet pulvinar ante.<br><br>
            
            Aliquam mollis risus eu massa aliquet pulvinar. Fusce tempus libero vel cursus finibus. Morbi vestibulum metus convallis, efficitur urna id, rhoncus ex. Phasellus nec magna vel est ornare lobortis. Aenean vel purus et tellus porta elementum ac eget nibh. Ut vitae interdum justo, sit amet semper enim. Nam efficitur sapien mi, nec convallis augue semper a. Vestibulum ligula dui, imperdiet at nunc in, consectetur maximus turpis.<br><br>
            
            Praesent placerat erat nec leo volutpat ornare. In ut ultrices velit. Donec quis ligula sodales, aliquet orci id, commodo tellus. Aliquam hendrerit, neque at vehicula bibendum, mauris felis faucibus ex, vel posuere tellus nisl eu dolor. Mauris ultrices turpis vel ligula molestie, in fringilla velit ultricies. Sed pretium sem iaculis maximus sodales. Sed sed lectus vitae magna aliquam maximus. Sed tellus ex, sollicitudin quis aliquam eget, consequat in sapien. Nulla maximus tortor in ipsum aliquet pulvinar. Mauris sed dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut augue quis lacus molestie efficitur. Quisque mattis arcu risus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Aen massa.';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'In eu feugiat elit, eu mollis massa. Proin lobortis, nulla ut tristique iaculis, purus mauris viverra elit, a iaculis eros mauris et purus. ',
            'body' => 'Donec ac purus mattis, maximus nibh id, scelerisque velit. Ut pulvinar fringilla ex, eu consequat sem mollis a. Nullam volutpat sit amet diam ut pretium. Integer at tempor metus, et malesuada ipsum. Etiam euismod, lorem nec fermentum suscipit, ante odio lobortis libero, ac ultricies lectus est at nisi. Aenean non efficitur felis, et facilisis augue. Nam eget arcu a ex egestas sodales. Vivamus in velit vitae arcu tincidunt eleifend ut at nulla. Curabitur congue nulla sit amet sagittis tincidunt. Curabitur nec dolor ac lectus malesuada venenatis. Proin sed ante sed eros dapibus euismod ullamcorper quis nibh. Donec euismod aliquet mauris nec vehicula. Vivamus fermentum velit tellus, vel maximus massa rhoncus sed.<br><br>

            Cras lacinia volutpat libero, imperdiet scelerisque nulla eleifend eget. Aliquam suscipit interdum diam, sed varius mauris tincidunt sit amet. Vivamus a purus leo. Phasellus malesuada cursus enim in ullamcorper. Integer sollicitudin hendrerit varius. Donec nunc augue, vehicula ac finibus in, efficitur vitae massa. Pellentesque molestie pretium justo, non scelerisque mauris egestas in. Pellentesque ipsum nunc, bibendum at accumsan eu, malesuada ac mi.<br><br>
            
            Maecenas in lorem sit amet nulla blandit finibus. Morbi rutrum ante eu ante viverra, vitae sollicitudin mauris rutrum. Curabitur hendrerit urna ac sapien bibendum, ac scelerisque ex rhoncus. Morbi ac viverra felis, ut aliquet nisi. In vulputate ex dui, in malesuada nulla aliquam id. Sed non sollicitudin mi, sit amet vulputate nulla. Donec mi odio, volutpat id egestas vel, convallis at sapien. Ut metus mi, consectetur quis libero id, convallis aliquam nibh. Donec odio turpis, rutrum eu condimentum quis, egestas nec nunc. Ut nulla nunc, efficitur sit amet pulvinar vitae, lacinia ut nulla.<br><br>
            
            Duis at dui dignissim, varius nulla eget, porta orci. Nam a luctus tortor, ac mollis ante. Donec quis lacinia nisl, sit amet cursus ante. Ut viverra mauris ut facilisis sagittis. Sed nec aliquam magna. Nullam hendrerit lorem sit amet urna lobortis, a malesuada lectus scelerisque. Nunc iaculis justo maximus, volutpat risus vitae, scelerisque neque. Donec commodo nec sapien eu consequat. Vivamus at ante vestibulum, molestie nisi ut, dictum nisi. Proin mattis lobortis mi, ut feugiat mi elementum quis. Phasellus cursus mauris ut feugiat tincidunt. Donec tristique egestas porta.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Vivamus aor ornare mi ut pel';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Pellentesque auctor quis purus eget euismod. Vestibulum ultricies neque id dui gravida bibendum. Ut vitae mi lacus. Cras mi nulla, egestas ut dap',
            'body' => 'Ut ultricies diam a velit auctor, sit amet finibus magna scelerisque. Curabitur pharetra ut lacus a porta. Curabitur consequat tortor at posuere feugiat. Maecenas et molestie lectus. Morbi posuere eget turpis et interdum. Etiam orci lectus, suscipit imperdiet elit consectetur, tempor gravida est. Proin imperdiet tortor vitae semper pretium. Proin iaculis accumsan est a fermentum. Sed tincidunt est nec placerat suscipit.<br><br>

            Nullam at magna enim. Praesent gravida porta magna sed sodales. Morbi at sem velit. Nam ut sodales urna. Mauris orci erat, ultricies posuere felis vitae, venenatis lobortis leo. Nullam a risus tincidunt, dapibus enim eget, faucibus magna. Nulla convallis vestibulum lorem, laoreet pellentesque justo dignissim vitae. Ut tempor urna hendrerit nibh fermentum tristique. Phasellus vestibulum orci vel nunc hendrerit tincidunt. Suspendisse vitae justo fringilla, ultrices justo quis, varius metus. Nullam tempor ligula mi. Nunc non blandit sem. Maecenas vitae eleifend ex. Maecenas malesuada id diam in eleifend. Donec ultricies erat mauris, quis sagittis risus gravida et.<br><br>
            
            Cras sagittis orci vitae nulla imperdiet mattis nec in velit. Vestibulum ac purus magna. Nunc euismod pharetra eros in consectetur. Proin pharetra tincidunt justo vel suscipit. Ut non porta urna. Vestibulum ac ornare tellus. Cras volutpat varius erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sodales justo vel eros aliquet finibus. Nam sit amet ultricies massa. Nunc non tempus sem. Praesent volutpat finibus nisi, sit amet molestie arcu rhoncus eu. Duis facilisis ipsum maximus laoreet faucibus. Sed sollicitudin ex vitae nunc commodo aliquet. Nam ullamcorper nisl vel turpis dapibus eleifend. Etiam iaculis ullamcorper diam, in viverra lorem vestibulum ac.<br><br>
            
            Vivamus venenatis rhoncus pellentesque. Vestibulum fermentum ante posuere ex malesuada, sit amet dignissim nibh finibus. Quisque eget turpis quis risus convallis lobortis. Proin semper auctor quam, quis placerat ligula pulvinar a. Mauris ut magna mi. Duis ullamcorper, enim et finibus vestibulum, metus diam mollis elit, ut tempor nisl elit ac tellus. Nunc varius velit lacus, id vulputate ex faucibus sit amet. Pellentesque euismod placerat tristique. Vivamus malesuada, diam in congue luctus, leo est luctus urna, ut commodo arcu magna tempor mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam quis ullamcorper mi, eu faucibus turpis. Nam aliquet, felis sed sodales lobortis, purus augue fermentum sem, at venenatis sapien purus sed enim. Ut tincidunt ac eros nec gravida.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'ris lacus ipsum, blandit in';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis he.',
            'body' => 'Phasellus sollicitudin nisl a sapien auctor bibendum. Ut interdum, elit at feugiat lacinia, lorem turpis consectetur magna, sit amet maximus tellus magna non lorem. Nam nec aliquet felis. Duis fermentum diam vel consequat mollis. Vestibulum at lacus commodo ante molestie fermentum. Sed id justo varius augue porta malesuada non ac ipsum. Aliquam justo est, faucibus a egestas at, porta nec enim. Fusce facilisis pharetra massa, sit amet varius libero consectetur ut. Integer cursus dui quis massa consectetur, id lobortis dolor imperdiet. Integer sed sapien non tortor finibus ultrices tincidunt nec dolor. Sed pellentesque porttitor magna sed scelerisque. Nunc tempor sapien sem, nec ornare tellus malesuada bibendum.<br><br>

            Cras sed augue eget orci ultricies dignissim quis vitae augue. Vivamus dapibus cursus est, nec aliquet sem luctus id. Praesent efficitur enim dolor, at molestie ex efficitur ac. Mauris fringilla nibh diam, id ultrices magna finibus quis. In consectetur sapien quis nulla dapibus viverra. Proin semper, lorem a consectetur aliquam, orci turpis consequat lorem, et tincidunt massa magna nec mi. Integer mollis eros at nunc vulputate tempor. Nunc gravida lorem nibh, nec pellentesque velit gravida ut. Sed hendrerit ante turpis, eu iaculis ligula vestibulum nec. Etiam at tellus a erat pulvinar maximus. Suspendisse ut leo maximus, vulputate nunc vitae, gravida nibh. Fusce vulputate fringilla finibus. Nulla eu dapibus ipsum. Nam ut mi gravida, sodales augue eget, iaculis nisi. Fusce quis ligula quam. Quisque efficitur laoreet ultrices.<br><br>
            
            Nunc rhoncus in enim id congue. Fusce tristique mi vitae magna volutpat, a convallis ante faucibus. Phasellus cursus malesuada nibh, eget tincidunt elit rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tincidunt dui urna, at iaculis elit accumsan sit amet. Nullam velit justo, aliquet nec orci vel, efficitur malesuada nisl. Proin rhoncus mi elit, et faucibus nisl malesuada nec. Quisque auctor orci non lorem porta egestas. Suspendisse id congue libero, vitae ultrices tellus. Donec nec facilisis elit, non fringilla dui. Vivamus maximus ipsum et turpis pharetra, ut tincidunt nisi consequat. Nullam semper nibh maximus arcu consectetur, sit amet tristique mauris tincidunt. Duis ullamcorper a nisl a maximus. Nullam non leo vitae urna aliquet rutrum.<br><br>
            
            Etiam mollis turpis eget neque finibus commodo. Integer orci ipsum, accumsan id luctus vel, molestie ac nisl. Nulla vel lobortis odio. Sed varius ante orci, in blandit nisl aliquet at. Donec vel dui tellus. Donec sodales ligula nibh, a semper turpis vehicula rhoncus. Sed viverra commodo interdum. Praesent ut dolor id nulla viverra sollicitudin ac facilisis nisi. Nulla lorem eros, rhoncus vel elementum id, maximus sed erat. Aliquam erat volutpat. Fusce lacinia dui sit amet libero hendrerit, ut scelerisque magna lacinia. Nam euismod semper mauris finibus interdum. Nam pretium a sapien a tincidunt. Suspendisse a consectetur tellus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
        $imgsm = $faker->imageUrl('416', '256');
        $imglg = $faker->imageUrl('1280', '416');
        $titlePost = 'Sed fiat, dolor quis';
        Post::create([
            'title' => $titlePost,
            'slug' => str_slug($titlePost),
            'excerpt' => 'Sed feugiat, dolor quis tincidunt tincidunt, nibh nisl interdum urna, quis facilisis orci ipsum in mi. Donec dapibus eros nisi, eu consequat felis he.',
            'body' => 'Phasellus sollicitudin nisl a sapien auctor bibendum. Ut interdum, elit at feugiat lacinia, lorem turpis consectetur magna, sit amet maximus tellus magna non lorem. Nam nec aliquet felis. Duis fermentum diam vel consequat mollis. Vestibulum at lacus commodo ante molestie fermentum. Sed id justo varius augue porta malesuada non ac ipsum. Aliquam justo est, faucibus a egestas at, porta nec enim. Fusce facilisis pharetra massa, sit amet varius libero consectetur ut. Integer cursus dui quis massa consectetur, id lobortis dolor imperdiet. Integer sed sapien non tortor finibus ultrices tincidunt nec dolor. Sed pellentesque porttitor magna sed scelerisque. Nunc tempor sapien sem, nec ornare tellus malesuada bibendum.<br><br>

            Cras sed augue eget orci ultricies dignissim quis vitae augue. Vivamus dapibus cursus est, nec aliquet sem luctus id. Praesent efficitur enim dolor, at molestie ex efficitur ac. Mauris fringilla nibh diam, id ultrices magna finibus quis. In consectetur sapien quis nulla dapibus viverra. Proin semper, lorem a consectetur aliquam, orci turpis consequat lorem, et tincidunt massa magna nec mi. Integer mollis eros at nunc vulputate tempor. Nunc gravida lorem nibh, nec pellentesque velit gravida ut. Sed hendrerit ante turpis, eu iaculis ligula vestibulum nec. Etiam at tellus a erat pulvinar maximus. Suspendisse ut leo maximus, vulputate nunc vitae, gravida nibh. Fusce vulputate fringilla finibus. Nulla eu dapibus ipsum. Nam ut mi gravida, sodales augue eget, iaculis nisi. Fusce quis ligula quam. Quisque efficitur laoreet ultrices.<br><br>
            
            Nunc rhoncus in enim id congue. Fusce tristique mi vitae magna volutpat, a convallis ante faucibus. Phasellus cursus malesuada nibh, eget tincidunt elit rhoncus ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tincidunt dui urna, at iaculis elit accumsan sit amet. Nullam velit justo, aliquet nec orci vel, efficitur malesuada nisl. Proin rhoncus mi elit, et faucibus nisl malesuada nec. Quisque auctor orci non lorem porta egestas. Suspendisse id congue libero, vitae ultrices tellus. Donec nec facilisis elit, non fringilla dui. Vivamus maximus ipsum et turpis pharetra, ut tincidunt nisi consequat. Nullam semper nibh maximus arcu consectetur, sit amet tristique mauris tincidunt. Duis ullamcorper a nisl a maximus. Nullam non leo vitae urna aliquet rutrum.<br><br>
            
            Etiam mollis turpis eget neque finibus commodo. Integer orci ipsum, accumsan id luctus vel, molestie ac nisl. Nulla vel lobortis odio. Sed varius ante orci, in blandit nisl aliquet at. Donec vel dui tellus. Donec sodales ligula nibh, a semper turpis vehicula rhoncus. Sed viverra commodo interdum. Praesent ut dolor id nulla viverra sollicitudin ac facilisis nisi. Nulla lorem eros, rhoncus vel elementum id, maximus sed erat. Aliquam erat volutpat. Fusce lacinia dui sit amet libero hendrerit, ut scelerisque magna lacinia. Nam euismod semper mauris finibus interdum. Nam pretium a sapien a tincidunt. Suspendisse a consectetur tellus.',
            'imagesmall' => $imgsm,
            'imagelarge' => $imglg,
            'published' => false,
            'user_id' => 1
        ]);
    }
}
