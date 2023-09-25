import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import checkout from './chechout/checkout';

Alpine.data('checkout', checkout);
Livewire.start();
