                        <?php
                        require_once 'classes/Manager.php';
                        require_once 'config/db.php';
                        $manager = new Manager($db);
                        $destinations = $manager->getHomeDestination();

                        foreach ($destinations as $destination) {
                            echo '<li><a class="dropdown-item" href="http://localhost/Projet_ComparOperator/tours-operateurs.php?destination_id=' . $destination->getId() . '">' . $destination['location'] . '</a>
                                    <li><hr class="dropdown-divider"></li></li>';
                        }
