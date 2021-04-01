<div>
<div class="mt-2">
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio" name="pru" value="1" wire:model="actualDog">
      <span class="ml-2">PRU</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="lucky" value="2" wire:model="actualDog">
      <span class="ml-2">LUCKY</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="spirit" value="3" wire:model="actualDog">
      <span class="ml-2">SPIRIT</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="chicalinda" value="4" wire:model="actualDog">
      <span class="ml-2">CHICA LINDA</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="abigail" value="5" wire:model="actualDog">
      <span class="ml-2">ABIGAIL</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="misterio" value="6" wire:model="actualDog">
      <span class="ml-2">MISTERIO</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="junipero" value="7" wire:model="actualDog">
      <span class="ml-2">JUNIPERO</span>
    </label>
    <label class="inline-flex items-center ml-6">
      <input type="radio" class="form-radio" name="tuso" value="8" wire:model="actualDog">
      <span class="ml-2">TUSO</span>
    </label>
  </div>

    <livewire:livewire-line-chart
        key="{{ $lineChartModel->reactiveKey() }}"
        :line-chart-model="$lineChartModel"
        />     
</div>
