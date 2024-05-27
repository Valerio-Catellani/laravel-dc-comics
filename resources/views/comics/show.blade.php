@extends('layouts.app')

@section('title', 'Create Comics')

@section('content')
    <main id="comic-details" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')" class="pb-5">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-5 mb-5">
            <h1 class="text-center hype-text-shadow text-white display-1 fw-bolder">{{ $comic['series'] }}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <div class="col-8">
                        <h2>Descrizione</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus voluptatum, incidunt
                            consectetur fugiat quod, minus omnis ipsa ratione consequuntur dignissimos fugit voluptates
                            dolorem, a voluptatibus. Ullam velit magni autem dolorum. Ea dicta nulla cum, officiis neque
                            culpa? Eum adipisci veniam illo voluptate quas labore. Culpa totam voluptate dolores quisquam
                            minima praesentium, soluta perspiciatis enim necessitatibus aperiam ab nam, hic magnam. A modi
                            facere sapiente porro? Voluptates, ipsa id! Culpa officiis, eos accusantium hic nihil provident
                            eveniet eaque autem incidunt nostrum expedita eligendi error labore alias harum esse debitis
                            doloribus aut mollitia! Adipisci delectus quisquam maxime dolor officiis quos laborum beatae
                            totam? Et, hic numquam tempore voluptatum commodi ipsam suscipit dolor saepe? At, maiores! Ex,
                            tempora vitae! Natus excepturi dolores illo quia, quo, neque eius rem cupiditate numquam
                            incidunt voluptas quae error doloribus voluptate! Similique at maxime, inventore tenetur facere
                            qui veritatis iste sequi dicta voluptate ab amet quod rerum laboriosam! Vel veritatis est
                            temporibus nesciunt odio quia id obcaecati ea quidem, debitis reprehenderit laudantium iste quos
                            commodi adipisci velit facilis! Fugiat nam eligendi facilis, optio deleniti dolor quibusdam.
                            Repellat architecto facilis soluta debitis optio voluptatum voluptate accusamus dicta enim ab
                            doloremque minus sunt fugiat ducimus voluptatem praesentium labore quod eligendi ipsum quae
                            explicabo voluptas, rerum eveniet velit. At tempore quam fuga eaque commodi provident molestiae
                            nobis aliquid, ea odit velit a numquam accusantium, iusto quae exercitationem tenetur eum
                            praesentium odio veritatis neque illo cumque. Beatae praesentium, asperiores dolor ratione eaque
                            saepe. Amet inventore exercitationem voluptatem totam! Sequi, inventore saepe accusamus dolorem
                            est soluta impedit nihil, dolor sed expedita fugiat labore quis placeat nostrum. Illum odit
                            aliquam laborum ut veritatis voluptas, nulla totam repudiandae odio tempora beatae maxime omnis,
                            accusantium hic. Adipisci, consequatur ratione? Architecto cumque reprehenderit molestiae vitae
                            vero illum distinctio nobis sit ad amet eum optio iure exercitationem doloribus incidunt
                            veritatis sed dolor, esse magni ipsam culpa cum suscipit! Natus sint soluta laudantium
                            aspernatur, consequatur dicta a ipsa deserunt iste nihil recusandae non, fugit sunt facilis
                            exercitationem, blanditiis magnam unde provident at minima dolor ullam eius deleniti assumenda.
                            Optio quae fuga vitae esse velit perspiciatis in minima repudiandae sint. Quasi repellendus est
                            possimus explicabo totam aliquam aliquid officiis odit illo! Hic pariatur eligendi error quasi
                            delectus accusantium veniam, in inventore sed facere consectetur autem, sit laboriosam officia
                            magnam! Quo ab optio minima quae sapiente suscipit dicta blanditiis porro, autem doloremque at
                            temporibus est animi beatae incidunt maiores neque architecto corporis? Quisquam ipsum sapiente
                            iste rem, ipsam dolores suscipit neque obcaecati! Autem vitae officia necessitatibus in alias
                            repellat dolorem earum dolor nesciunt facilis ducimus libero, explicabo non exercitationem error
                            quia iure voluptas. Numquam iure at qui recusandae, quis odit in facere optio suscipit ea sequi,
                            dolorem tenetur vel libero et rem quos! Dolorum nihil consequatur aspernatur, illo suscipit
                            fugiat, beatae molestias, in ea quae nulla. Iusto illo numquam harum deleniti nemo labore dicta
                            quae nihil, vero quo ad sed aliquid minima atque id possimus reiciendis animi velit consequuntur
                            quod eaque. Ipsum aperiam suscipit fugiat accusantium voluptatum? Eum facilis molestias iusto!
                        </p>
                        <h3>Prezzo</h3>
                        <h6>{{ $comic['price'] }}</h6>
                        <h3>Serie</h3>
                        <h6>{{ $comic['series'] }}</h6>
                        <h3>Numero di pagine</h3>
                        <h6>
                            <?= rand(20, 100) ?>
                        </h6>
                        <div class="d-flex justify-content-center">
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger shadow">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    </div>

@endsection
